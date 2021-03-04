<?php

namespace ContainerT1OiWtX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TYWY7uEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tYWY7uE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tYWY7uE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'flashy' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', true],
            'verfahren' => ['privates', '.errored..service_locator.tYWY7uE.App\\Entity\\Verfahren', NULL, 'Cannot autowire service ".service_locator.tYWY7uE": it references class "App\\Entity\\Verfahren" but no such service exists.'],
        ], [
            'flashy' => '?',
            'verfahren' => 'App\\Entity\\Verfahren',
        ]);
    }
}
