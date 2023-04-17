<?php
require_once __DIR__ . '/../Products.php';
class Toys extends Products
{
    private $specs;

    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal, string $_specs)
    {
        parent::__construct($_id,  $_name,  $_price,  $_img,  $_animal);
        $this->specs = $_specs;
    }
}
