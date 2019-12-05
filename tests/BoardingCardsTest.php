<?php
use PHPUnit\Framework\TestCase;
use App\Model\Entity\BoardingCards;

    class ArrayTest extends TestCase
{
    public function testFailure()
    {
        $this->assertIsArray([]);
    }
}
