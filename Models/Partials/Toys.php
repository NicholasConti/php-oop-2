<?php
//include class Products.php
require_once __DIR__ . '/../Products.php';
class Toys extends Products
{
    public $specs;

    /**
     * __construct
     *
     * @param  string $_id
     * @param  string $_name
     * @param  int $_price
     * @param  string $_img
     * @param  mixed $_animal
     * @param  string $_specs
     * @return void
     */
    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal, string $_specs)
    {
        parent::__construct($_id,  $_name,  $_price,  $_img,  $_animal);
        $this->specs = $_specs;
    }

    public function get_specs()
    {
        return $this->specs;
    }
    public function set_specs($_specs)
    {
        return $this->specs = $_specs;
    }
}
