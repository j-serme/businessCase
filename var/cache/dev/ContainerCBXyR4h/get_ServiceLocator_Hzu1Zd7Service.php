<?php

namespace ContainerCBXyR4h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hzu1Zd7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hzu1Zd7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hzu1Zd7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AddressController::change' => ['privates', '.service_locator.MTNQajG', 'get_ServiceLocator_MTNQajGService', true],
            'App\\Controller\\AddressController::delete' => ['privates', '.service_locator.MTNQajG', 'get_ServiceLocator_MTNQajGService', true],
            'App\\Controller\\AddressController::new' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AdminController::changeAnimal' => ['privates', '.service_locator.o_Rpns3', 'get_ServiceLocator_ORpns3Service', true],
            'App\\Controller\\AdminController::changeCategory' => ['privates', '.service_locator.UhIBCzx', 'get_ServiceLocator_UhIBCzxService', true],
            'App\\Controller\\AdminController::changeProduct' => ['privates', '.service_locator.fE7k3Z5', 'get_ServiceLocator_FE7k3Z5Service', true],
            'App\\Controller\\AdminController::changeUsers' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\AdminController::createAnimal' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AdminController::createCategory' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AdminController::createProducts' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AdminController::deleteAnimal' => ['privates', '.service_locator.o_Rpns3', 'get_ServiceLocator_ORpns3Service', true],
            'App\\Controller\\AdminController::deleteCategory' => ['privates', '.service_locator.UhIBCzx', 'get_ServiceLocator_UhIBCzxService', true],
            'App\\Controller\\AdminController::deleteProduct' => ['privates', '.service_locator.cMgpYgF', 'get_ServiceLocator_CMgpYgFService', true],
            'App\\Controller\\AdminController::deleteUsers' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\AdminController::indexAnimal' => ['privates', '.service_locator.ufaoIXj', 'get_ServiceLocator_UfaoIXjService', true],
            'App\\Controller\\AdminController::indexCategories' => ['privates', '.service_locator.Ndw0NZG', 'get_ServiceLocator_Ndw0NZGService', true],
            'App\\Controller\\AdminController::indexProducts' => ['privates', '.service_locator.OKj5qXB', 'get_ServiceLocator_OKj5qXBService', true],
            'App\\Controller\\AdminController::indexUsers' => ['privates', '.service_locator.BE_HSvK', 'get_ServiceLocator_BEHSvKService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.OKj5qXB', 'get_ServiceLocator_OKj5qXBService', true],
            'App\\Controller\\ProfileController::change' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\ProfileController::changePassword' => ['privates', '.service_locator.vVC90Af', 'get_ServiceLocator_VVC90AfService', true],
            'App\\Controller\\ProfileController::delete' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AddressController:change' => ['privates', '.service_locator.MTNQajG', 'get_ServiceLocator_MTNQajGService', true],
            'App\\Controller\\AddressController:delete' => ['privates', '.service_locator.MTNQajG', 'get_ServiceLocator_MTNQajGService', true],
            'App\\Controller\\AddressController:new' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AdminController:changeAnimal' => ['privates', '.service_locator.o_Rpns3', 'get_ServiceLocator_ORpns3Service', true],
            'App\\Controller\\AdminController:changeCategory' => ['privates', '.service_locator.UhIBCzx', 'get_ServiceLocator_UhIBCzxService', true],
            'App\\Controller\\AdminController:changeProduct' => ['privates', '.service_locator.fE7k3Z5', 'get_ServiceLocator_FE7k3Z5Service', true],
            'App\\Controller\\AdminController:changeUsers' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\AdminController:createAnimal' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AdminController:createCategory' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AdminController:createProducts' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AdminController:deleteAnimal' => ['privates', '.service_locator.o_Rpns3', 'get_ServiceLocator_ORpns3Service', true],
            'App\\Controller\\AdminController:deleteCategory' => ['privates', '.service_locator.UhIBCzx', 'get_ServiceLocator_UhIBCzxService', true],
            'App\\Controller\\AdminController:deleteProduct' => ['privates', '.service_locator.cMgpYgF', 'get_ServiceLocator_CMgpYgFService', true],
            'App\\Controller\\AdminController:deleteUsers' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\AdminController:indexAnimal' => ['privates', '.service_locator.ufaoIXj', 'get_ServiceLocator_UfaoIXjService', true],
            'App\\Controller\\AdminController:indexCategories' => ['privates', '.service_locator.Ndw0NZG', 'get_ServiceLocator_Ndw0NZGService', true],
            'App\\Controller\\AdminController:indexProducts' => ['privates', '.service_locator.OKj5qXB', 'get_ServiceLocator_OKj5qXBService', true],
            'App\\Controller\\AdminController:indexUsers' => ['privates', '.service_locator.BE_HSvK', 'get_ServiceLocator_BEHSvKService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.OKj5qXB', 'get_ServiceLocator_OKj5qXBService', true],
            'App\\Controller\\ProfileController:change' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\ProfileController:changePassword' => ['privates', '.service_locator.vVC90Af', 'get_ServiceLocator_VVC90AfService', true],
            'App\\Controller\\ProfileController:delete' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AddressController::change' => '?',
            'App\\Controller\\AddressController::delete' => '?',
            'App\\Controller\\AddressController::new' => '?',
            'App\\Controller\\AdminController::changeAnimal' => '?',
            'App\\Controller\\AdminController::changeCategory' => '?',
            'App\\Controller\\AdminController::changeProduct' => '?',
            'App\\Controller\\AdminController::changeUsers' => '?',
            'App\\Controller\\AdminController::createAnimal' => '?',
            'App\\Controller\\AdminController::createCategory' => '?',
            'App\\Controller\\AdminController::createProducts' => '?',
            'App\\Controller\\AdminController::deleteAnimal' => '?',
            'App\\Controller\\AdminController::deleteCategory' => '?',
            'App\\Controller\\AdminController::deleteProduct' => '?',
            'App\\Controller\\AdminController::deleteUsers' => '?',
            'App\\Controller\\AdminController::indexAnimal' => '?',
            'App\\Controller\\AdminController::indexCategories' => '?',
            'App\\Controller\\AdminController::indexProducts' => '?',
            'App\\Controller\\AdminController::indexUsers' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProfileController::change' => '?',
            'App\\Controller\\ProfileController::changePassword' => '?',
            'App\\Controller\\ProfileController::delete' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AddressController:change' => '?',
            'App\\Controller\\AddressController:delete' => '?',
            'App\\Controller\\AddressController:new' => '?',
            'App\\Controller\\AdminController:changeAnimal' => '?',
            'App\\Controller\\AdminController:changeCategory' => '?',
            'App\\Controller\\AdminController:changeProduct' => '?',
            'App\\Controller\\AdminController:changeUsers' => '?',
            'App\\Controller\\AdminController:createAnimal' => '?',
            'App\\Controller\\AdminController:createCategory' => '?',
            'App\\Controller\\AdminController:createProducts' => '?',
            'App\\Controller\\AdminController:deleteAnimal' => '?',
            'App\\Controller\\AdminController:deleteCategory' => '?',
            'App\\Controller\\AdminController:deleteProduct' => '?',
            'App\\Controller\\AdminController:deleteUsers' => '?',
            'App\\Controller\\AdminController:indexAnimal' => '?',
            'App\\Controller\\AdminController:indexCategories' => '?',
            'App\\Controller\\AdminController:indexProducts' => '?',
            'App\\Controller\\AdminController:indexUsers' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProfileController:change' => '?',
            'App\\Controller\\ProfileController:changePassword' => '?',
            'App\\Controller\\ProfileController:delete' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
