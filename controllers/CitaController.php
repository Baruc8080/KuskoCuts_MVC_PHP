<?php

namespace Controllers;
use MVC\Router;

class CitaController{
    public static function index(Router $router) {

        // Inicia la sesión si aún no está iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        isAuth();
        
        // Verifica si 'nombre' está definido en $_SESSION antes de acceder a él
        $nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';

        $router->render('cita/index', [
            'nombre' => $_SESSION["nombre"],
            'id' => $_SESSION['id']
        ]);
    }
}
