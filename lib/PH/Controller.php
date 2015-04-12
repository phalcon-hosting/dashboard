<?php

namespace PH;

use Slim\Slim;

class Controller {

    /**
     * @return Slim
     */
    public function getApplication(){
        return Slim::getInstance("PH");
    }

    public function renderView($viewName, $params = []){
        echo $this->getApplication()->container->get("di")["view"]->render($viewName, $params);
    }

}