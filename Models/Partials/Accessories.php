<?php
//include class Products.php
require_once __DIR__ . '/../Products.php';
class Accessories extends Products
{
    private $materials;

    /**
     * __construct
     *
     * @param  string $_id
     * @param  string $_name
     * @param  int $_price
     * @param  string $_img
     * @param  mixed $_animal
     * @param  string $mat
     * @return void
     */
    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal, string $mat)
    {
        parent::__construct($_id,  $_name,  $_price,  $_img,  $_animal);
        $this->materials = $mat;
    }

    public function get_materials()
    {
        return $this->materials;
    }
    public function set_materialss($mat)
    {
        return $this->materials = $mat;
    }
}
