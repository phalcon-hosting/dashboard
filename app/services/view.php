<?php
use Phalcon\Mvc\View,
    PH\Master\Translate,
    Phalcon\Mvc\View\Engine\Twig as TwigEngine;

/**
 * Setting up the view component
 */
$di->set('view', function() use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines(array(
        '.twig' => function($view, $di) use ($config) {

            $options = [];

            if ("development" == APPLICATION_ENV) {
                $options['debug'] = true;
            }

            $twig = new TwigEngine($view, $di, $options);
            $te=$twig->getTwig();
            $te->getLoader()->addPath($config->application->viewsDir);


            //=====================
            // enable cache or not
            if ("development" != APPLICATION_ENV) {
                $te->setCache($config->application->cacheDir . "/twig");
            }


            return $twig;
        }
    ));

    return $view;
}, true);
