<?php

namespace ContainerIQ1V5Fh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UrOtvGKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.urOtvGK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.urOtvGK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArchivageCaissier::__invoke' => ['privates', '.service_locator.5789TdV', 'get_ServiceLocator_5789TdVService', true],
            'App\\Controller\\ArchivageUser::__invoke' => ['privates', '.service_locator.oQeH6FZ', 'get_ServiceLocator_OQeH6FZService', true],
            'App\\Controller\\TransactionController::depot' => ['privates', '.service_locator.oxOyE3e', 'get_ServiceLocator_OxOyE3eService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ArchivageCaissier:__invoke' => ['privates', '.service_locator.5789TdV', 'get_ServiceLocator_5789TdVService', true],
            'App\\Controller\\ArchivageCaissier' => ['privates', '.service_locator.5789TdV', 'get_ServiceLocator_5789TdVService', true],
            'App\\Controller\\ArchivageUser:__invoke' => ['privates', '.service_locator.oQeH6FZ', 'get_ServiceLocator_OQeH6FZService', true],
            'App\\Controller\\ArchivageUser' => ['privates', '.service_locator.oQeH6FZ', 'get_ServiceLocator_OQeH6FZService', true],
            'App\\Controller\\TransactionController:depot' => ['privates', '.service_locator.oxOyE3e', 'get_ServiceLocator_OxOyE3eService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ArchivageCaissier::__invoke' => '?',
            'App\\Controller\\ArchivageUser::__invoke' => '?',
            'App\\Controller\\TransactionController::depot' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ArchivageCaissier:__invoke' => '?',
            'App\\Controller\\ArchivageCaissier' => '?',
            'App\\Controller\\ArchivageUser:__invoke' => '?',
            'App\\Controller\\ArchivageUser' => '?',
            'App\\Controller\\TransactionController:depot' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}