<?php
//include class Products.php
require_once __DIR__ . '/../Products.php';
class Food extends Products
{
    private $ingredients;
    private $grams;

    /**
     * __construct
     *
     * @param  string $_id
     * @param  string $_name
     * @param  int $_price
     * @param  string $_img
     * @param  mixed $_animal
     * @param  string $_ingr
     * @param  string $_gr
     * @return void
     */
    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal, string $_ingr, int $_gr)
    {
        parent::__construct($_id,  $_name,  $_price,  $_img,  $_animal);
        $this->ingredients = $_ingr;
        $this->grams = $_gr;
    }
}
