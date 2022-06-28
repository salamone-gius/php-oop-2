<?php

    class Product {
        public $name;
        public $price;
        public $stock;
        public $forWhatAnimal;

        public function __construct($_name, $_price, $_stock, $_for_what_animal)
        {
            $this->name = $_name;
            $this->price = $_price;
            $this->stock = $_stock;
            $this->forWhatAnimal = $_for_what_animal;
        }
    }

?>