<?php

/**
 * Products
 */
class Products
{
    private $id;
    private $name;
    private $price;
    private $image;

    public function __construct(string $_id, string $_name, int $_price, string $_img)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_img;
    }
}
