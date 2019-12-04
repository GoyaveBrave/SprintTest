<?php
namespace App;
use App\Model\entity\Database;
use App\Controller\CardsController;

require_once "Model/Entity/Connection.php";
require_once "Controller/CardsController.php";

Database::getPdo();

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