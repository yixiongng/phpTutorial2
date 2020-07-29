<?php

    /*requirement
        - 3 pages - home, about us and contact us using 
        - https://platesphp.com/ 
        - noodlehaus/dispatch
        - vlucas/phpdotenv
    */

    require('vendor/autoload.php');
    
    $root = '/tutorial2';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/templates');
    $dotenv->load();

    route('GET', $root.'', function () {
        $templates = new League\Plates\Engine('./templates');
        $websiteName =  $_ENV['websiteName'];
        return response($templates->render('home',['websiteName'=>$websiteName]));
    });

    route('POST', $root.'/aboutUs', function () {
        $templates = new League\Plates\Engine('./templates');
        return response($templates->render('aboutUs'));
    });

    route('POST', $root.'/contactUs', function () {
        $templates = new League\Plates\Engine('./templates');
        $contactPerson =  $_ENV['contactPerson'];
        $contactNumber =  $_ENV['contactNumber'];
        return response($templates->render('contactUs',['contactPerson'=>$contactPerson,'contactNumber'=>$contactNumber]));
    });

    dispatch();
?>