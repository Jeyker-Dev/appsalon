<?php

namespace Controllers;

use MVC\Router;

class CitaController
{
    public static function index( Router $router )
    {
        session_start();
        $router->render('cita/index', 
        [
            'nombre' => $_SESSION['nombre']
        ]);
    }   // Here End Function Index

}   // Here End Class

