<?php

namespace Promethys\Revive\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class TranslationsTest extends TestCase
{
    private const REFERENCE_LOCALE = 'en';

    private static function langPath(): string
    {
        return dirname(__DIR__, 2) . '/resources/lang';
    }

    private static function load(string $locale): array
    {
        return require self::langPath() . "/{$locale}/translations.php";
    }

    /**
     * @param  array<string, mixed>  $translations
     * @return array<string, mixed>
     */
    private static function flatten(array $translations, string $prefix = ''): array
    {
        $flat = [];

        foreach ($translations as $key => $value) {
            $compositeKey = $prefix === '' ? (string) $key : "{$prefix}.{$key}";

            if (is_array($value)) {
                $flat += self::flatten($value, $compositeKey);
            } else {
                $flat[$compositeKey] = $value;
            }
        }

        return $flat;
    }

    public static function localeProvider(): array
    {
        $locales = array_map('basename', glob(self::langPath() . '/*', GLOB_ONLYDIR));

        return array_map(fn (string $locale) => [$locale], $locales);
    }

    #[DataProvider('localeProvider')]
    public function test_locale_has_the_same_keys_as_the_reference(string $locale): void
    {
        $reference = array_keys(self::flatten(self::load(self::REFERENCE_LOCALE)));
        $actual = array_keys(self::flatten(self::load($locale)));

        $missing = array_values(array_diff($reference, $actual));
        $unexpected = array_values(array_diff($actual, $reference));

        $this->assertSame([], $missing, "[{$locale}] is missing keys: " . implode(', ', $missing));
        $this->assertSame([], $unexpected, "[{$locale}] has unexpected keys: " . implode(', ', $unexpected));
    }

    #[DataProvider('localeProvider')]
    public function test_locale_has_no_empty_values(string $locale): void
    {
        $empty = array_keys(
            array_filter(
                self::flatten(self::load($locale)),
                fn ($value) => $value === null || $value === '',
            )
        );

        $this->assertSame([], $empty, "[{$locale}] has empty values: " . implode(', ', $empty));
    }
}
