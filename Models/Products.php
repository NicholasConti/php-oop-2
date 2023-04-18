<?php
require_once __DIR__ . '/../Traits/Name.php';
require_once __DIR__ . '/Category.php';

/**
 * Products
 */
class Products
{
    use Name;
    private $id;
    private $price;
    private $image;
    private $pet;

    public function __construct(string $_id, string $_name, int $_price, string $_img, Category $_animal)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->set_price($_price);
        $this->image = $_img;
        $this->pet = $_animal;
    }


    public function get_price()
    {
        return $this->price;
    }
    public function set_price($_price)
    {
        if ($_price <= 0 && !is_float($_price)) {
            throw new Exception('Il prezzo non ha un formato corretto!');
        }
        $this->price = $_price;
    }


    public function get_img()
    {
        return $this->image;
    }
    public function set_img($_img)
    {
        return $this->image = $_img;
    }


    public function get_category()
    {
        return $this->pet;
    }
    public function set_category($_animal)
    {
        return $this->pet = $_animal;
    }
}
