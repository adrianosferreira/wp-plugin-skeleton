# WP Plugin Skeleton

That's just another skeleton for quickly prototyping of WordPress plugins.

## Installation

It's recommended that you use Composer to install this library.

- Create an empty folder inside `wp-content/plugins` and name it as your plugin name
- Enter inside of it and run the command:
```
$ composer create-project adrianoferreira/wp-plugin-skeleton:dev-master
```

## Make commands

Make a production build of the plugin and place it inside of the `./build` folder:
```
$ make build
```

Run unit tests:
```
$ make test
```

Development build:
```
$ make dev
```