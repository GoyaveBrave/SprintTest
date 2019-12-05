<?php
namespace Tests\Model;

use App\Controller\CardsController;
use App\Model\BoardingCardsConverter;
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testIsJson()
    {
        require_once 'src/Controller/CardsController.php';
        $CardsController = new CardsController();
        $result = $CardsController->converter();
        $this->assertJson($result);


    }
}