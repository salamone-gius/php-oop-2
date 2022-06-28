<?php

    require_once __DIR__ . '/Product.php';

    class Toy extends Product {
        public $toyType;

        public function __construct(string $_name, float $_price, int $_stock, string $_for_what_animal, string $_toy_type)
        {
            parent::__construct($_name, $_price, $_stock, $_for_what_animal);

            $this->toyType = $_toy_type;
        }
    }
?>