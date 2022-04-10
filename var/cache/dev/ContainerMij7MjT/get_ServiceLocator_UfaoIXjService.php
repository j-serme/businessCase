<?php

namespace ContainerMij7MjT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UfaoIXjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ufaoIXj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ufaoIXj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\AnimalRepository',
        ]);
    }
}