<?php
require_once __DIR__ . '/Category.php';

/**
 * Products
 */
class Products
{
    private $id;
    public $name;
    public $price;
    public $image;
    public $pet;

    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_img;
        $this->pet = $_animal;
    }
}
