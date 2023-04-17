<?php
require_once __DIR__ . '/Category.php';

/**
 * Products
 */
class Products
{
    private $id;
    private $name;
    private $price;
    private $image;
    private $pet;

    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_img;
        $this->pet = $_animal;
    }
}
