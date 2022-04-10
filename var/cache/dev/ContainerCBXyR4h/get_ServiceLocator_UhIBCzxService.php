<?php

namespace ContainerCBXyR4h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UhIBCzxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UhIBCzx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UhIBCzx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.UhIBCzx.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.UhIBCzx": it references class "App\\Entity\\Category" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'category' => 'App\\Entity\\Category',
            'manager' => '?',
        ]);
    }
}
