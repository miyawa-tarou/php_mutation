<?php

use MiyawaTarou\PhpMutation\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSample1()
    {
        $actual = Sample::sample1(2, 3);
        $this->assertEquals(8, $actual);;
    }

    public function testSample2()
    {
        $actual = Sample::sample2(3, 4);
        $this->assertTrue($actual);;

        $actual = Sample::sample2(11, 1);
        $this->assertTrue($actual);;

        $actual = Sample::sample2(2, 5);
        $this->assertFalse($actual);;
    }

    public function testSample3()
    {
        $actual = Sample::sample3(6, 11);
        $this->assertTrue($actual);;

        $actual = Sample::sample3(6, 10);
        $this->assertTrue($actual);;

        $actual = Sample::sample3(5, 11);
        $this->assertTrue($actual);;

        $actual = Sample::sample3(5, 10);
        $this->assertFalse($actual);;
    }

    public function testSample4()
    {
        $actual = Sample::sample4(101);
        $this->assertEquals(101000, $actual);;

        $actual = Sample::sample4(100);
        $this->assertEquals(100, $actual);;
    }

    public function testSample5()
    {
        $actual = Sample::sample5(1);
        $this->assertEquals(1, $actual);;
    }
}