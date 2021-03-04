<?php

namespace ContainerT1OiWtX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__RZs9q2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..RZs9q2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..RZs9q2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'verfahrenRepository' => ['privates', 'App\\Repository\\VerfahrenRepository', 'getVerfahrenRepositoryService', true],
        ], [
            'paginator' => '?',
            'verfahrenRepository' => 'App\\Repository\\VerfahrenRepository',
        ]);
    }
}
