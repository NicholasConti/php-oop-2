<?php

class Category
{

    public $animal;

    /**
     * __construct
     *
     * @param  string $_name
     * @return font-awesome
     */
    public function __construct(string $_name)
    {
        $this->animal = $_name;
        $this->get_fa($_name);
    }

    /**
     * get_fa
     *
     * @param  mixed $animal
     * @return void
     */
    public function get_fa($animal)
    {
        switch (strtolower($animal)) {
            case 'dog':
                return '<i class="fa-solid fa-dog"></i>';
                break;
            case 'cat':
                return '<i class="fa-solid fa-cat"></i>';
                break;
            case 'fish':
                return '<i class="fa-solid fa-fish-fins"></i>';
                break;
            case 'bird':
                return '<i class="fa-solid fa-dove"></i>';
                break;
        }
    }
}
