<?php
//include class Products.php
require_once __DIR__ . '/../Products.php';
class Food extends Products
{
    private $grams;

    /**
     * __construct
     *
     * @param  string $_id
     * @param  string $_name
     * @param  int $_price
     * @param  string $_img
     * @param  mixed $_animal
     * @param  string $_gr
     * @return void
     */
    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal, int $_gr)
    {
        parent::__construct($_id,  $_name,  $_price,  $_img,  $_animal);
        $this->grams = $_gr;
    }

    public function get_grams()
    {
        return $this->grams;
    }
    public function set_grams($_gr)
    {
        return $this->grams = $_gr;
    }
}
