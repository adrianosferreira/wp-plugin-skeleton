# WP Plugin Skeleton

That's just another skeleton for quickly prototyping of WordPress plugins.

It comes out of the box with:

- PHPStan
- PHP_CodeSniffer
- PHPUnit
- Travis Yaml file
- Twig
- Make commands 

## Installation

It's recommended that you use Composer to install this library.

Inside of `wp-content/plugins` run the command:
```
$ composer create-project adrianoferreira/wp-plugin-skeleton:dev-master
```

## Make commands

Make a production build of the plugin and place it inside of the `./build` folder:
```
$ make build
```

Run unit tests, style check and static files check:
```
$ make test
```

Development build:
```
$ make dev
```