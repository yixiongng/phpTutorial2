<?php

    class User {
        public $name = null;
        public $phoneNo = null;
        public $email = null;

        public function __construct($name, $phoneNo, $email) {
            $this->name = $name;
            $this->phoneNo = $phoneNo;
            $this->email = $email;
        }

        public function getName() {
            return $this->name;
        }

        public function getPhoneNo() {
            return $this->phoneNo;
        }
        
        public function getEmail() {
            return $this->email;
        }
    }
?>