# Netgen Admin UI Sylius Bundle

[![Build Status](https://img.shields.io/travis/netgen/NetgenAdminUISyliusBundle.svg?style=flat-square)](https://travis-ci.org/netgen/NetgenAdminUISyliusBundle)
[![Code Coverage](https://img.shields.io/codecov/c/github/netgen/NetgenAdminUISyliusBundle.svg?style=flat-square)](https://codecov.io/gh/netgen/NetgenAdminUISyliusBundle)
[![Quality Score](https://img.shields.io/scrutinizer/g/netgen/NetgenAdminUISyliusBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/netgen/NetgenAdminUISyliusBundle)
[![Downloads](https://img.shields.io/packagist/dt/netgen/admin-ui-sylius-bundle.svg?style=flat-square)](https://packagist.org/packages/netgen/admin-ui-sylius-bundle/stats)
[![Latest stable](https://img.shields.io/github/release/netgen/NetgenAdminUISyliusBundle.svg?style=flat-square)](https://github.com/netgen/NetgenAdminUISyliusBundle/releases)
[![License](https://img.shields.io/packagist/l/netgen/admin-ui-sylius-bundle.svg?style=flat-square)](LICENSE)

This bundle integrates Sylius into Netgen Admin UI by adding a menu plugin which loads the complete Sylius admin interface inside the Netgen Admin UI itself.

## Installation instructions

Use Composer:

```bash
$ composer require netgen/admin-ui-sylius-bundle:^2.0
```

Activate the bundle inside the kernel:

```php
$bundles[] = new Netgen\Bundle\AdminUISyliusBundle\NetgenAdminUISyliusBundle();
```

Install bundle assets:

```bash
$ php app/console assets:install --symlink --relative
```

and that's it!
