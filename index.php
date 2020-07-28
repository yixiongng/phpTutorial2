<?php

    /*requirement
        - 3 pages - home, about us and contact us using 
        - https://platesphp.com/ 
        - noodlehaus/dispatch
        - vlucas/phpdotenv

    */

    //echo 'hello world';

    require('vendor/autoload.php');
    
    $root = '/tutorial2';

    route('GET', $root.'', function () {
        $templates = new League\Plates\Engine('./templates');
        echo $templates->render('home');
        return response('');
    });

    route('POST', $root.'/aboutUs', function () {
        $templates = new League\Plates\Engine('./templates');
        echo $templates->render('aboutUs');
        return response('');
    });

    route('POST', $root.'/contactUs', function () {
        $templates = new League\Plates\Engine('./templates');
        echo $templates->render('contactUs');
        return response('');
    });

    dispatch();
    
?>