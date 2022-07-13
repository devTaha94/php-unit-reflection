<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;
use Src\Doctor;

class AbstractPersonTest extends \PHPUnit\Framework\TestCase
{
    public function testNameAndTitleIsReturned()
    {
        $person = new Doctor('green');

        $this->assertEquals('DR. green',$person->getNameAndTitle());
    }

    public function testNameAndTitleIsReturnedMocked()
    {
        $person = $this->getMockBuilder(\Src\AbstractPerson::class)
                  ->setConstructorArgs(['green'])
                  ->getMockForAbstractClass();

        $person->method('getTitle')->willReturn('DR.');


        $this->assertEquals('DR. green',$person->getNameAndTitle());
    }
}

