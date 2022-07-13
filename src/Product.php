<?php namespace Src;

class Product
{
    /**
     * @var  int
     */
    protected $product_id;

    public function __construct()
    {
        $this->product_id = rand();
    }
}