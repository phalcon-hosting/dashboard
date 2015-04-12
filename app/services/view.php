<?php

$loader = new Twig_Loader_Filesystem( ROOT_PATH . "/app/views");

$params = array(
    "cache" => ROOT_PATH . "/app/cache"
);

$twig = new Twig_Environment($loader, $params);

return $twig;