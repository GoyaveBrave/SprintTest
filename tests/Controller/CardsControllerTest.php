<?php
namespace Tests\Model;

use App\Controller\CardsController;
use App\Model\BoardingCardsConverter;
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    //Je test que ma conversion du PHP au JSON me retourne bien du JSON
    public function testIsJson()
    {
        require_once 'src/Controller/CardsController.php';
        $CardsController = new CardsController();
        $result = $CardsController->converter();
        $this->assertJson($result);


    }
}