<?php
namespace App\Controller;

use App\Model\entity\Database;
use App\Model\Entity\BoardingCards;
use App\Model\Manager\BoardingCardsManager;
require_once "Model/Entity/Connection.php";
require_once "Model/Entity/BoardingCards.php";
require_once "Controller/CardsController.php";
require_once "Model/Manager/BoardingCardsManager.php";

class CardsController
{
    //DB connexion
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }

    public function show()
    {
        $BoardingCards = new BoardingCardsManager;
        $cards = $BoardingCards->showAll();
        //var_dump($cards); die;
        include('View/Vue.html.php');
        
    }
}