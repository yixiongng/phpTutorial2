<?php
    namespace App\Controllers;
    use User;
    use League\Plates\Engine;

    require(__DIR__.'/../templates/user.php');

    class HomeController {

        public static function index() {
            //die('abc');

            $templates = new Engine(__DIR__.'/../templates');
            $websiteName =  $_ENV['websiteName'];
            
            if(isset($_POST['name'])) {
                $user = new User($_POST['name'],$_POST['phoneNo'],$_POST['email']);
                $name = $user->getName();
                $phoneNo = $user->getPhoneNo();
                $email = $user->getEmail();
            } else {
                $name = '';
                $phoneNo = '';
                $email = '';
            }
            
            return response($templates->render('home',['websiteName'=>$websiteName,'name'=>$name,'phoneNo'=>$phoneNo,'email'=>$email]));
        }
    }

?>