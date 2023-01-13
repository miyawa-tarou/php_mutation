<?php

use MiyawaTarou\PhpMutation\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSample1()
    {
        $actual = Sample::sample1(1, 1);
        $this->assertEquals(1, $actual);;
    }

    public function testSample2()
    {
        $actual = Sample::sample2(3, 4);
        $this->assertTrue($actual);;
    }

    public function testSample3()
    {
        $actual = Sample::sample3(100, 100);
        $this->assertTrue($actual);;
    }

    public function testSample4()
    {
        $actual = Sample::sample4(500);
        $this->assertEquals(500000, $actual);;
    }
}