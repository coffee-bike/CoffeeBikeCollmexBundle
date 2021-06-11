<?php

namespace CoffeeBike\CollmexBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class CoffeeBikeCollmexExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setParameter('coffee_bike_collmex.user', $config['user']);
        $container->setParameter('coffee_bike_collmex.password', $config['password']);
        $container->setParameter('coffee_bike_collmex.customer_id', $config['customer_id']);
        $container->setParameter('coffee_bike_collmex.logger', $config['logger']);
    }
}
