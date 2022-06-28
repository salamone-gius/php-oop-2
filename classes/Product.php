<?php

    class Product {
        public $name;
        public $price;
        public $stock;
        public $forWhatAnimal;

        public function __construct(string $_name, float $_price, int $_stock, string $_for_what_animal)
        {
            $this->name = $_name;
            $this->price = $_price;
            $this->stock = $_stock;
            $this->forWhatAnimal = $_for_what_animal;
        }
    }
?>