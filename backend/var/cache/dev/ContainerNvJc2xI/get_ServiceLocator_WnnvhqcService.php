<?php

namespace ContainerNvJc2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WnnvhqcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Wnnvhqc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Wnnvhqc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'token' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'token' => '?',
        ]);
    }
}