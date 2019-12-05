<?php
namespace App;
use App\Controller\CardsController;


require_once "src/Controller/CardsController.php";

try {
    $controller = new CardsController;
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
        if (method_exists($controller, $action)) {
            $controller->$action();
        }
    } else {
        $controller->show();
    }
} catch (Exeption $e) {
    die('Erreur : '.$e->getMessage());
}