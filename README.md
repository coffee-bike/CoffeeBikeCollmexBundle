# [WIP] CollmexBundle
This is a Symfony Bundle for the Collmex API.

**Notice**: This bundle is still work in progress!

**Please open an issue or a PR if you want to contribute to the project.** Take a look at the [**Contribution** page](https://github.com/coffee-bike/CoffeeBikeCollmexBundle/wiki/Contribution)

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require coffeebike/collmex-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new CoffeeBike\CollmexBundle\CoffeeBikeCollmexBundle(),
        );

        // ...
    }

    // ...
}
```
Step 3: Add configuration to config.yml
-------------------------

Add credentials for Collmex user in `app/config.yml`:

```yaml
coffee_bike_collmex:
    user: 'collmex-user'
    password: '*********'
    customer_id: '123456'
```
