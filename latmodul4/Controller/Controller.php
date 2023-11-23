<?php 

namespace Controller;

class Controller
{
    // VARIABLE ATRIBUT
    var $controllerName;
    var $controllerMethod;

    // METHOD UNTUK MENGAMBIL SEMUA ATRIBUT
    public function getControllerAttribut()
    {
        return [
            "ControllerName" => $this -> controllerName,
            "Method" => $this -> controllerMethod
        ];
    }
}