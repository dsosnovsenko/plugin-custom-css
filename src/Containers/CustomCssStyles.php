<?php
namespace CustomCss\Containers;

use Plenty\Plugin\Templates\Twig;

class CustomCssStyles
{
    public function call(Twig $twig):string
    {
        return $twig->render('CustomCss::content.CustomCssStyles');
    }
}