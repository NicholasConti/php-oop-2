<?php
require_once __DIR__ . '/../Products.php';
class Food extends Products
{
    private $ingredients;
    private $grams;

    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal, string $_ingr, int $_gr)
    {
        parent::__construct($_id,  $_name,  $_price,  $_img,  $_animal);
        $this->ingredients = $_ingr;
        $this->grams = $_gr;
    }
}
