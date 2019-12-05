<?php
namespace Tests\Model;

use App\Model\BoardingCardsConverter;
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testIsArray()
    {
        require_once 'src/Model/BoardingCardsConverter.php';
        $BoardingCardsConverter = new BoardingCardsConverter();
        $result = $BoardingCardsConverter->convertPhp();

        $this->assertIsArray($result);
    }

    public function testIsJson()
    {
        require_once 'src/Model/BoardingCardsConverter.php';
        $BoardingCardsConverter = new BoardingCardsConverter();
        $result = $BoardingCardsConverter->convertJson($converted);
        $this->assertJsonStringEqualsJsonFile(
            '/inputTest.json', json_encode($converted)
        );


    }
}