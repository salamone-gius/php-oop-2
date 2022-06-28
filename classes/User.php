<?php

    class User {
        public $name;
        public $surname;
        public $email;
        public $discount = 0;
        public $creditCard;

        public function __construct(string $_name, string $_surname, string $_email, string $_credit_card)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->creditCard = $_credit_card;
        }
    }
?>