<?php

class CalculatorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function testSum()
    {
        $calculator = new \App\Utils\Calculator();

        $this->assertSame(3, $calculator->sum(1, 2));
    }
}
