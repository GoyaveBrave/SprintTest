<?php
namespace App\Model;

use App\Model\Entity\BoardingCards;

class BoardingCardsConverter
{
    public function convertPhp()
    {
        $url = 'src/input.json';
        $data = file_get_contents($url);
        $cards = json_decode($data, true);
        
        return $cards;
        
    }
    public function convertJson($converted)
    {
        $converted_json = json_encode($converted, true);
        return $converted_json;
    }
}