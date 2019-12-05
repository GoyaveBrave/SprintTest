<?php
namespace App\Controller;

use App\Model\BoardingCardsConverter;
use App\Model\Manager\BoardingCardsSorter;

require_once "src/Model/BoardingCardsSorter.php";
require_once "src/Model/BoardingCardsConverter.php"; 


//Le controller de notre architecture qui va nous permettre d'actionner nos functions
class CardsController
{
    //Création de deux variables qui vont contenir nos tableaux

    //variable contenant le tableau initial converti du JSON au PHP
    private $cards = [];
    //Variable contenant le tableau final converti du php au JSON
    private $converted_json = [];

    public function converter()
    {
        //Je récupère la conversion du tableau JSON au PHP et la stock dans ma variable $converted
        $BoardingCardsConverter = new BoardingCardsConverter;
        $this->cards = $BoardingCardsConverter->convertPhp();
        $converted = $this->cards;
        //Je mets dans l'ordre mes tickets que j'ai stocké dans $converted
        $sorter = new BoardingCardsSorter;
        $converted = $sorter->sortMiddleBoarding($converted);
        $converted = $sorter->setFirstAndLastBoarding($converted);

        //Une fois mes tickets remis dans l'ordre, je les converti en JSON
        $this->converted_json = $BoardingCardsConverter->convertJson($converted);
        $converted_json = $this->converted_json;

        
        return $converted_json;
    }

    
}

