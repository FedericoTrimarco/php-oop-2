<?php

    require_once __DIR__ . '/user.php';

    class UserPremium extends User {

        public $discount = 30;
        public function __construct($name, $product, $price) {
            parent::__construct($name, $product, $price);
        }

        private function setDiscount() {
            return $this->price - (($this->price * $this->discount) / 100);
        }

        public function getDiscount() {
            return $this->setDiscount();
        }
    }