<?php

    /*requirement
        - create a form for user to fill in 
        - store details into database
    */
    namespace App\Controllers;
    use User;
    use League\Plates\Engine;

    require(__DIR__.'/../models/user.php');
    require(__DIR__.'/../helpers/dbConnection.php');

    class HomeController {

        public static function index() {

            $templates = new Engine(__DIR__.'/../templates');
            $websiteName =  $_ENV['websiteName'];
            $dbStatus = dbConn();
            
            if(isset($_POST['name'])) {
                $user = new User($_POST['name'],$_POST['phoneNo'],$_POST['email']);
                $name = $user->getName();
                $phoneNo = $user->getPhoneNo();
                $email = $user->getEmail();
                
            } else {
                $name = '';
                $phoneNo = '';
                $email = '';
                $dbStatus = '';
            }
            
            return response($templates->render('home',['websiteName'=>$websiteName,'name'=>$name,'phoneNo'=>$phoneNo,'email'=>$email,'dbStatus'=>$dbStatus]));
        }
    }

    function dbConn() {
        $conn = OpenCon();
        $sql = "INSERT INTO userdetails (name, phoneNumber, email) VALUES ('".$name."','".$phoneNo."','".$email."')";
        if(mysqli_query($conn, $sql)){
            $dbStatus =  "Records inserted successfully.";
        } else{
            $dbStatus =  "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        CloseCon($conn);

        return $dbStatus;
    }
?>