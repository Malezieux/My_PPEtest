<?php

namespace ContainerV01bB2W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AVXTlAOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aVXTlAO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aVXTlAO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EnvoiBDDController::createBDD' => ['privates', '.service_locator.PGbObpm', 'get_ServiceLocator_PGbObpmService', true],
            'App\\Controller\\IdentificationController::new' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PostController::new' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PostController::showPosts' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\EnvoiBDDController:createBDD' => ['privates', '.service_locator.PGbObpm', 'get_ServiceLocator_PGbObpmService', true],
            'App\\Controller\\IdentificationController:new' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PostController:new' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PostController:showPosts' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\EnvoiBDDController::createBDD' => '?',
            'App\\Controller\\IdentificationController::new' => '?',
            'App\\Controller\\PostController::new' => '?',
            'App\\Controller\\PostController::showPosts' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EnvoiBDDController:createBDD' => '?',
            'App\\Controller\\IdentificationController:new' => '?',
            'App\\Controller\\PostController:new' => '?',
            'App\\Controller\\PostController:showPosts' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
