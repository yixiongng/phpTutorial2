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
            echo 'Your name is '.$this->name;
        }

        public function getTest() {
            echo 'This is a test';
        }

        public function getPhoneNo() {
            echo 'Your phone Number is '.$this->phoneNo;
        }
        
        public function getEmail() {
            echo 'Your email is '.$this->email;
        }
    }
?>