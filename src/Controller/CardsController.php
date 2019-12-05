<?php
namespace App\Controller;

use App\Model\BoardingCardsConverter;
use App\Model\Manager\BoardingCardsSorter;

require_once "src/Model/BoardingCardsSorter.php";
require_once "src/Model/BoardingCardsConverter.php"; 

class CardsController
{
    private $cards = [];
    private $converted_json = [];

    public function converter()
    {
        $BoardingCardsConverter = new BoardingCardsConverter;
        $this->cards = $BoardingCardsConverter->convertPhp();
        $converted = $this->cards;
        
        $sorter = new BoardingCardsSorter;
        $converted = $sorter->sortMiddleBoarding($converted);
        $converted = $sorter->setFirstAndLastBoarding($converted);

        
        $this->converted_json = $BoardingCardsConverter->convertJson($converted);
        $converted_json = $this->converted_json;
        return $converted_json;
    }

    
}

