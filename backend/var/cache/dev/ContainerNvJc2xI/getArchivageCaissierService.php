<?php

namespace ContainerNvJc2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArchivageCaissierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ArchivageCaissier' shared autowired service.
     *
     * @return \App\Controller\ArchivageCaissier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/ArchivageCaissier.php';

        return $container->services['App\\Controller\\ArchivageCaissier'] = new \App\Controller\ArchivageCaissier(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}