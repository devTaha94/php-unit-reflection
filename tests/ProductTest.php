<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;
use Src\Product;

class ProductTest extends MockeryTestCase
{
    public function testProductIdIsInteger()
    {
        $product   = new Product();

        $reflector = new ReflectionClass(Product::class);

        $property  = $reflector->getProperty('product_id');
        $property->setAccessible(true);
        $result    = $property->getValue($product);

        $this->assertIsInt($result);
    }
}

