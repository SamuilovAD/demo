<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class SomeClassTest extends TestCase
{
    public function test1(): void
    {
        $mock = $this->createMock(\App\Utils\SomeClass::class);
        $mock->method('returnTestData1')->willReturn('test data 2');
        $response = $mock->returnTestData1();
        $this->assertSame('test data 2', $response);
    }

    public function test2(): void
    {
        $mock = $this->createMock(\App\Utils\SomeClass::class);
        $mock->method('returnTestData1')->will($this->returnValue('test data 2'));
        $response = $mock->returnTestData1();
        $this->assertSame('test data 2', $response);
    }

    public function test3(): void
    {
        $mock = $this->createMock(\App\Utils\SomeClass::class);
        $mock->method('returnTestData1')->will($this->returnArgument(1));
        $response = $mock->returnTestData1('test data1','test data 2');
        $this->assertSame('test data 2', $response);
    }

    public function test4(): void
    {
        $mock = $this->getMockBuilder()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();
        
    }
}