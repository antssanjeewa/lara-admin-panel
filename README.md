# Laravel File and Media Handling Package

# My Package Name

A custom Composer package for Laravel that includes a default user migration, model, and controller. This package helps streamline the setup of new Laravel projects by providing these common components out of the box.

## Installation

To install the package, use Composer:

```bash
composer require vendor/my-package-name
```

Add the private repository in your 'composer.json` file.

```bash
"repositories": [
    {
        "type":"vcs",
        "url":"git@bitbucket.org:elegantmedia/laravel-media-manager.git"
    }
]
```

Add the repository to the required list on composer.json
`composer require emedia/laravel-media-manager`

## Publish Configuration files

```
php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"
```

## Usage


## Common Issues



## Contributing

- Found a bug? Report as an issue and if you can, submit a pull request.
- Please see [CONTRIBUTING](CONTRIBUTING.md) and for details.

Copyright (c) Elegant Media.
