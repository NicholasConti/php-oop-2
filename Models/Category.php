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
     * @param  mixed $_name
     * @return void
     */
    public function get_fa($_name)
    {
        $string_animal = '';
        switch (strtolower($_name)) {
            case 'dog':
                $string_animal = '<i class="fa-solid fa-dog"></i>';
                break;
            case 'cat':
                $string_animal = '<i class="fa-solid fa-cat"></i>';
                break;
            case 'fish':
                $string_animal = '<i class="fa-solid fa-fish-fins"></i>';
                break;
            case 'bird':
                $string_animal = '<i class="fa-solid fa-dove"></i>';
                break;
        }
        return $string_animal;
    }
}
