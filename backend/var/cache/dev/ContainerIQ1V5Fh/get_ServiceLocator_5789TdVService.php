<?php

namespace ContainerIQ1V5Fh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5789TdVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5789TdV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5789TdV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'data' => ['privates', '.errored..service_locator.5789TdV.App\\Entity\\Caissier', NULL, 'Cannot autowire service ".service_locator.5789TdV": it references class "App\\Entity\\Caissier" but no such service exists.'],
        ], [
            'data' => 'App\\Entity\\Caissier',
        ]);
    }
}
