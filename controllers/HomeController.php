<?php
    namespace App\Controllers;
    use User;
    use League\Plates\Engine;

    require(__DIR__.'/../templates/user.php');

    class HomeController {

        public static function index() {

            $templates = new Engine(__DIR__);
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