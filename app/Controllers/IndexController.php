<?php

namespace Controllers;
use PH\Controller;

/**
 * Class TestController
 *
 * @package Controllers
 */
class IndexController extends Controller
{
    /**
     *
     * @Route('/')
     *
     * @Method('GET')
     * @Name('index')
     *
     */
    public function indexAction()
    {
        $this->renderView("index/index.twig");
    }

}