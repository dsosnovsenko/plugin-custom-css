<?php
namespace CustomCss\Providers;

use IO\Extensions\Functions\Partial;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ConfigRepository;

class CustomCssServiceProvider extends ServiceProvider
{
    const EVENT_LISTENER_PRIORITY = 100;

    public function register()
    {
    }

    public function boot(Twig $twig, Dispatcher $eventDispatcher, ConfigRepository $config)
    {
        // Register Twig String Loader to use function: template_from_string
        $twig->addExtension('Twig_Extension_StringLoader');

        $eventDispatcher->listen('IO.init.templates', function (Partial $partial) {
            //$partial->set('head', 'Ceres::PageDesign.Partials.Head');
            //$partial->set('header', 'Ceres::PageDesign.Partials.Header.Header');
            //$partial->set('footer', 'Ceres::PageDesign.Partials.Footer');
            $partial->set('footer', 'CustomCss::content.CustomCssStyles');
            //$partial->set('page-design', 'Ceres::PageDesign.PageDesign');

        }, self::EVENT_LISTENER_PRIORITY);
    }

    public function call(Twig $twig):string
    {
        return $twig->render('CustomCss::content.CustomCssStyles');
    }
}