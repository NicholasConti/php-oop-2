<?php

class Category
{

    private $animal;
    private $icon;

    /**
     * __construct
     *
     * @param  string $_name
     * @return font-awesome
     */
    public function __construct(string $_name)
    {
        $this->animal = $_name;
        $this->icon = $this->get_fa($_name);
    }

    /**
     * get_fa
     *
     * @param  string $_name
     * @return string
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
            default:
                $string_animal = 'All';
        }
        return $string_animal;
    }

    public function get_animal()
    {
        return $this->animal;
    }
    public function set_animal($_name)
    {
        return $this->animal = $_name;
    }

    public function get_icon()
    {
        return $this->icon;
    }
}
