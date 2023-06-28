<?php

namespace ContainerEdZ6HfS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_ExceptionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.exception' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/ErrorListener.php';

        return $container->privates['api_platform.listener.exception'] = new \ApiPlatform\Symfony\EventListener\ExceptionListener(new \ApiPlatform\Symfony\EventListener\ErrorListener('api_platform.action.exception', ($container->privates['logger'] ?? self::getLoggerService($container)), true));
    }
}
