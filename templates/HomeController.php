<?php
    require(__DIR__.'/user.php');

    class HomeController {

        public static function index() {

            $templates = new League\Plates\Engine(__DIR__);
            $websiteName =  $_ENV['websiteName'];
            
            if(isset($_POST['name'])) {
                $user = new User($_POST['name'],$_POST['phoneNo'],$_POST['email']);
                $name = $user->name;
                $phoneNo = $user->phoneNo;
                $email = $user->email;
            } else {
                $name = '';
                $phoneNo = '';
                $email = '';
            }
            
            return response($templates->render('home',['websiteName'=>$websiteName,'name'=>$name,'phoneNo'=>$phoneNo,'email'=>$email]));
        }
    }

?>