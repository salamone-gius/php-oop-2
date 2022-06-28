<?php

    class User {
        public $name;
        public $surname;
        public $email;
        public $discount;
        public $creditCard;

        public function __construct(string $_name, string $_surname, string $_email, int $_discount, string $_credit_card)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->discount = $_discount;
            $this->creditCard = $_credit_card;
        }
    }
?>