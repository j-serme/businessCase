<?php

namespace ContainerMij7MjT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditAddressTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EditAddressType' shared autowired service.
     *
     * @return \App\Form\EditAddressType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EditAddressType.php';

        return $container->privates['App\\Form\\EditAddressType'] = new \App\Form\EditAddressType();
    }
}
