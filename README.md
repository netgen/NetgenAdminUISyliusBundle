# Netgen Admin UI Sylius Bundle

This bundle integrates Sylius into Netgen Admin UI by adding a menu plugin which loads the complete Sylius admin interface inside the Netgen Admin UI itself.

## Installation instructions

Use Composer:

```bash
composer require netgen/admin-ui-sylius-bundle:^2.0
```

Activate the bundle inside the kernel:

```php
$bundles[] = new Netgen\Bundle\AdminUISyliusBundle\NetgenAdminUISyliusBundle();
```

and that's it!
