<?php
namespace Tests\Model;

use App\Model\BoardingCardsConverter;
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    //Je test que ma conversion du JSON au PHP me retourne bien array en PHP
    public function testIsArray()
    {
        require_once 'src/Model/BoardingCardsConverter.php';
        $BoardingCardsConverter = new BoardingCardsConverter();
        $result = $BoardingCardsConverter->convertPhp();

        $this->assertIsArray($result);
    }

}