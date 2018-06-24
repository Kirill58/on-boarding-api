<?php

class CalculatorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function testSumm()
    {
        $calculator = new \App\Utils\Calculator();

        $this->assertEquals(3, $calculator->sum(1, 2));
    }
}