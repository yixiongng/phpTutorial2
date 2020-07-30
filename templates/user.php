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

        public static function getName() {
            echo 'Your name is '.self::$name;
        }

        public static function getPhoneNo() {
            echo 'Your phone Number is '.self::$phoneNo;
        }
        
        public static function getEmail() {
            echo 'Your email is '.self::$email;
        }

        
    }
?>