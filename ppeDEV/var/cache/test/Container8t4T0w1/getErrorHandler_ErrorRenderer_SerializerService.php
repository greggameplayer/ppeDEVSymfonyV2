<?php

namespace Container8t4T0w1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getErrorHandler_ErrorRenderer_SerializerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'error_handler.error_renderer.serializer' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'error-handler'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'error-handler'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'error-handler'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'HtmlErrorRenderer.php';

        $a = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $container->privates['error_handler.error_renderer.serializer'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($container->services['serializer'] ?? $container->load('getSerializerService')), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), ($container->privates['twig.error_renderer.html'] ?? $container->load('getTwig_ErrorRenderer_HtmlService')), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true));
    }
}
