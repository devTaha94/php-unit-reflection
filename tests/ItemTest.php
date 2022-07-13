<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;
use Src\Item;

class ItemTest extends MockeryTestCase
{
    public function testGetToken()
    {
        $item = new Item();

        $reflector = new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($item);

        $this->assertIsString($result);
    }

    public function testGetPrefixedToken()
    {
        $item = new Item();

        $reflector = new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getPrefixedToken');
        $method->setAccessible(true);
        $result = $method->invokeArgs($item,['example']);

        $this->assertStringStartsWith('example',$result);
    }
}

