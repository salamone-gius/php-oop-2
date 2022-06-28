<?php

    class CreditCard {

        public $number;
        public $cvc;
        public $expireDate;
        public $circuit;
        public $name;
        public $surname;

        function __construct(string $_number, int $_cvc, string $_expireDate, string $_circuit)
        {
            $this->number = $_number;
            $this->cvc = $_cvc;
            $this->expireDate = $_expireDate;
            $this->circuit = $_circuit;
        }
    }
?>