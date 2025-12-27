<!-- ![calendar Banner](https://github.com/promethys/revive/tree/main/resources/imgs/banner.jpg) -->

# Filament RecycleBin for Laravel Models

[![Latest Version on Packagist](https://img.shields.io/packagist/v/promethys/revive.svg?style=flat-square)](https://packagist.org/packages/promethys/revive)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/promethys/revive/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/promethys/revive/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/promethys/revive.svg?style=flat-square)](https://packagist.org/packages/promethys/revive)

**Revive** is a plugin for [FilamentPHP](https://filamentphp.com) that brings a central **Recycle Bin** to your application. It lets you restore or permanently delete soft-deleted Eloquent models in just a few clicks.

This plugin is especially useful for SaaS applications, admin dashboards, or any multi-user platform where recovering accidentally deleted data is important.

![Preview Screenshot](https://raw.githubusercontent.com/Promethys/revive/refs/heads/main/resources/imgs/preview.png)
<!-- ![Preview Video](https://github.com/promethys/revive/tree/main/resources/imgs/video-preview.mp4) -->

---

## Release Strategy

- **v1.x**: Maintenance mode - critical bug fixes only
- **v2.x**: Active development - new features, improvements

---

## Features

- View, restore, and permanently delete soft-deleted records from a dedicated Filament page
- Register multiple models as "Recyclable" with a simple trait
- Filter items by model type or search through deleted records
- Customize the plugin's appearance and behavior with ease
- User and multi-tenancy support (**⌛ in development, available in v2**)
- Filament V4 support (**available in v2**)


---

## Filament v4 Compatibility

Filament v4 is supported starting from **plugin v2**.

- **v1.x**: compatible with **Filament v3.x only**
- **v2.x**: compatible with **Filament v4**

> If you are using Filament v4, make sure you install **plugin v2**.

---

## Installation

Install the package via Composer:

```bash
composer require promethys/revive:^1.0
php artisan revive:install
```

If you prefer to manually publish and run the migrations:

```bash
php artisan vendor:publish --tag="revive-migrations"
php artisan migrate
```

---

## Configuration

Register the plugin in your panel:

```php
use Promethys\Revive\RevivePlugin;

$panel->plugins([
    RevivePlugin::make()
]);
```

You can also customize the plugin using fluent configuration:

```php
use Promethys\Revive\RevivePlugin;

$panel->plugins([
    RevivePlugin::make()
        ->authorize(auth()->user()->isAdmin()) // Accepts a boolean or Closure to control access
        ->navigationGroup('Settings') // Group the page under a custom sidebar section
        ->navigationIcon('heroicon-o-archive-box-arrow-down')
        ->activeNavigationIcon('heroicon-o-archive-box-arrow-down')
        ->navigationSort(1)
        ->navigationLabel('Custom Label')
        ->title('Custom Title')
        ->slug('custom-slug')
]);
```

> ⚠️ The plugin currently supports only models in the `App\Models` namespace. 
> If you want to register a third-party model (e.g., from another package), create a wrapper class that extends it and add the `Recyclable` trait there: 

```php
namespace App\Models;

use Promethys\Revive\Traits\Recyclable;
use Vendor\Package\Models\Foo as BaseFoo;

class Foo extends BaseFoo
{
    use SoftDeletes;
    use Recyclable;
}
```

---

## Usage

Once the plugin is installed and configured, you'll see a new page in your Filament navigation menu.  
From there, users can restore deleted data or permanently remove it.

> In v1, Revive will show all the Recyclable records in a single table, without any user-specific scope. 
> You may use the plugin in your admin panel for now. 
> User-specific scope will be available in v2.

### 1. Add the `Recyclable` trait to any soft-deletable model

```php
use Promethys\Revive\Concerns\Recyclable;

class Post extends Model
{
    use SoftDeletes;
    use Recyclable;
}
```

> ℹ️ **Important:** Adding the `Recyclable` trait without using `SoftDeletes` will throw an exception.

### 2. Optional: Discover existing soft-deleted records

If you already have soft-deleted records before installing the plugin, you can "discover" them by running:

```bash
php artisan revive:discover-soft-deleted
```

This command will:
- Scan all models that use the `Recyclable` trait
- Find existing soft-deleted records that aren't already tracked in the recycle bin
- Add them to the plugin's tracking system so they appear in the Filament page

#### Command Options

**Preview changes without making them:**
```bash
php artisan revive:discover-soft-deleted --dry-run
```
Use this to see how many records would be discovered without actually adding them to the recycle bin.

**Discover records for a specific model:**
```bash
php artisan revive:discover-soft-deleted --model=Product
# or use the full class name
php artisan revive:discover-soft-deleted --model="App\Models\Shop\Product"
```

**Combine options:**
```bash
php artisan revive:discover-soft-deleted --model=Category --dry-run
```

#### Example Output

```bash
$ php artisan revive:discover-soft-deleted

Discovering soft-deleted records...

🔍 Scanning Category...
   No soft-deleted records found.
🔍 Scanning Comment...
   ✅ 0/3 records discovered
🔍 Scanning Brand...
   ✅ 8/8 records discovered
🔍 Scanning Category...
   ✅ 2/2 records discovered
🔍 Scanning Customer...
   ✅ 0/1 records discovered
🔍 Scanning Order...
   No soft-deleted records found.
🔍 Scanning Product...
   ✅ 12/15 records discovered

✨ Discovery completed:
   • 29 total soft-deleted records scanned
   • 22 new records discovered and added to recycle bin
```

> **💡 Tips:** 
> - Run the command with `--dry-run` first to preview what will be discovered, especially on production systems with large amounts of existing data.
> - For large systems with extensive output, consider redirecting the command output to a file: `php artisan revive:discover-soft-deleted > discovery-results.txt`

---

## Use the table outside the default page

You don't have to register the plugin in your panel to use the table.

Instead, you can render the Livewire component directly in a Blade view:

```php
@livewire(\Promethys\Revive\Tables\RecycleBin::class)
```

This is ideal if:
- You don't want to clutter your navigation
- You're not using Filament Panels but still want a recycle bin in your app

---

## Issue Guidelines

If you encounter a bug or unexpected behavior, please help us help you by following these guidelines:

* **[Create an issue on GitHub](https://github.com/Promethys/revive/issues)**: Create an issue on GitHub
* **Describe the issue clearly:** What did you try to do? What did you expect to happen? What actually happened?
* **Include relevant code snippets:** Show any relevant model, config, or page setup related to the issue.
* **Share error messages:** If possible, paste the full error output or stack trace.
* **Attach screenshots:** Visuals often help us understand UI-related bugs or logic problems more quickly.
* **Mention your setup:** Let us know your PHP version, Laravel version, Filament version, and the version of this plugin.

> The more details you provide, the faster and better we can help. Thank you!

---

## Contributing

See [CONTRIBUTING](.github/CONTRIBUTING.md) for guidelines.

---

## Credits

- [mintellity/laravel-recycle-bin](https://github.com/mintellity/laravel-recycle-bin) — inspiration for this package

---

## License

This project is open-sourced under the MIT license.  
See [LICENSE.md](LICENSE.md) for more details.
