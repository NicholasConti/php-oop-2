<?php
require_once __DIR__ . '/../Products.php';
class Accessories extends Products
{
    private $materials;

    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal, string $mat)
    {
        parent::__construct($_id,  $_name,  $_price,  $_img,  $_animal);
        $this->materials = $mat;
    }
}
