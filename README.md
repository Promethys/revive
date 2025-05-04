<!-- ![calendar Banner](https://github.com/Promethys/filament-revive/tree/main/resources/imgs/banner.jpg) -->

# Filament RecycleBin for Laravel Models

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mango/filament-revive.svg?style=flat-square)](https://packagist.org/packages/promethys/filament-revive)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mango/filament-revive/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mango/filament-revive/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mango/filament-revive/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mango/filament-revive/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mango/filament-revive.svg?style=flat-square)](https://packagist.org/packages/promethys/filament-revive)

**Filament Revive** is a plugin for [Filament](https://filamentphp.com) that brings a central **Recycle Bin** to your application. It lets you restore or permanently delete soft-deleted Eloquent models in just a few clicks.

This plugin is especially useful for SaaS applications, admin dashboards, or any multi-user platform where recovering accidentally deleted data is important.

![Preview Screenshot](https://github.com/Promethys/filament-revive/tree/main/resources/imgs/preview.png)
<!-- ![Preview Video](https://github.com/Promethys/filament-revive/tree/main/resources/imgs/video-preview.mp4) -->

---

## Features

- View, restore, and permanently delete soft-deleted records from a dedicated Filament page
- Register multiple models as "Recyclable" with a simple trait
- Filter items by model type or search through deleted records
- Customize the plugin’s appearance and behavior with ease

---

## Installation

Install the package via Composer:

```bash
composer require promethys/filament-revive
php artisan filament-revive:install
```

If you prefer to manually publish and run the migrations:

```bash
php artisan vendor:publish --tag="filament-revive-migrations"
php artisan migrate
```

---

## Configuration

Register the plugin in your panel:

```php
use Promethys\FilamentRevive\FilamentRevivePlugin;

$panel->plugins([
    FilamentRevivePlugin::make()
]);
```

You can also customize the plugin using fluent configuration:

```php
use Promethys\FilamentRevive\FilamentRevivePlugin;

$panel->plugins([
    FilamentRevivePlugin::make()
        ->authorize(auth()->user()->isAdmin()) // Accepts a boolean or Closure to control access
        ->navigationGroup('Settings') // Group the page under a custom sidebar section
        ->navigationIcon('heroicon-o-archive-box-arrow-down')
        ->activeNavigationIcon('heroicon-o-archive-box-arrow-down')
        ->navigationSort(1)
        ->navigationLabel('Custom Label')
        ->slug('custom-slug')
        ->modelsNamespace('App\\MyCoolApp\\Custom\\Models') // Default is App\\Models
]);
```

> ⚠️ The plugin currently supports only **one models namespace**.  
> If you want to register a third-party model (e.g., from another package), create a wrapper class that extends it and add the `Recyclable` trait there:

```php
namespace App\MyCoolApp\Custom\Models;

use Promethys\FilamentRevive\Traits\Recyclable;
use Vendor\Package\Models\Foo as BaseFoo;

class Foo extends BaseFoo
{
    use Recyclable;
}
```

---

## Usage

Once the plugin is installed and configured, you’ll see a new page in your Filament sidebar.  
From there, users can restore deleted data or permanently remove it.

### 1. Add the `Recyclable` trait to any soft-deletable model

```php
use Promethys\FilamentRevive\Concerns\Recyclable;

class Post extends Model
{
    use SoftDeletes;
    use Recyclable;
}
```

> ℹ️ **Important:** Adding the `Recyclable` trait without using `SoftDeletes` will throw an exception.

### 2. Optional: Discover existing soft-deleted records

If you already have soft-deleted records before installing the plugin, you’ll soon be able to “discover” them by running:

```bash
php artisan filament-revive:discover-soft-deleted
```

> 🧪 *This command is planned for version 1.*

---

## Use the table outside the default page

You don’t have to register the plugin in your panel to use the table.

Instead, you can render the Livewire component directly in a Blade view:

```php
@livewire(\Promethys\FilamentRevive\Tables\RecycleBin::class)
```

This is ideal if:
- You don’t want to clutter your navigation
- You’re not using Filament Panels but still want a recycle bin in your app

---

## Changelog

See [CHANGELOG](CHANGELOG.md) for a list of recent changes.

---

## Contributing

See [CONTRIBUTING](.github/CONTRIBUTING.md) for guidelines.

---

## Credits

- [Ilainiriko Tambaza](https://github.com/Promethys)
- [mintellity/laravel-recycle-bin](https://github.com/mintellity/laravel-recycle-bin) — inspiration for this package
- [All Contributors](../../contributors)

---

## License

This project is open-sourced under the MIT license.  
See [LICENSE.md](LICENSE.md) for more details.
