<?php

namespace ContainerCBXyR4h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ORpns3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o_Rpns3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o_Rpns3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'animal' => ['privates', '.errored..service_locator.o_Rpns3.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.o_Rpns3": it references class "App\\Entity\\Animal" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'animal' => 'App\\Entity\\Animal',
            'manager' => '?',
        ]);
    }
}
