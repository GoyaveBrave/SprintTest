<?php
namespace App\Model\Manager;

use App\Model\Entity\BoardingCards;
use App\Model\entity\Database;

require_once "Model/Entity/Connection.php";

class BoardingCardsManager
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }
    public function showAll()
    {
        $data = $this->pdo->prepare('SELECT * FROM boarding_cards ORDER BY id DESC');
        $data->execute();
        $cards = $data->fetchAll(\PDO::FETCH_CLASS, BoardingCards::class);
        
        return $cards;
        
    }
}