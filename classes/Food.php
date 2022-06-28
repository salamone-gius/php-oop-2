<?php

    require_once __DIR__ . '/Product.php';

    class Food extends Product {
        public $foodType;
        public $expireDate;

        public function __construct(string $_name, float $_price, int $_stock, string $_for_what_animal, string $_food_type, string $_expire_date)
        {
            parent::__construct($_name, $_price, $_stock, $_for_what_animal);

            $this->foodType = $_food_type;
            $this->expireDate = $_expire_date;
        }
    }
?>