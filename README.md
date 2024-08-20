# Laravel File and Media Handling Package

# Lara Admin Panel

A custom Composer package for Laravel that includes a default user migration, model, and controller. This package helps streamline the setup of new Laravel projects by providing these common components out of the box.

## Installation

To install the package, use Composer:

```bash
composer require antssanjeewa/lara-admin-panel
```

Add the private repository in your 'composer.json` file.

```bash
"repositories": [
    {
        "type":"vcs",
        "url":"git@github.com:antssanjeewa/lara-admin-panel.git"
    }
]
```

## Publish Configuration files

```
php artisan vendor:publish --provider="Antssanjeewa\LaraAdminPanel\AdminPanelServiceProvider"
```

## Usage


## Common Issues



## Contributing

- Found a bug? Report as an issue and if you can, submit a pull request.
- Please see [CONTRIBUTING](CONTRIBUTING.md) and for details.

Copyright (c) Elegant Media.
