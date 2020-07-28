
<?php
    require('vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $websiteName =  $_ENV['websiteName'];

   // $templates = new League\Plates\Engine('./templates');
    //echo $templates->render('home');


?>

<html>
    <body>
        <h1>Welcome to <?php echo $websiteName?></h1>
        <h2>This is the home page</h2>

        <form method="post" action="contactUs">
            <button>Contact Us</button>
        </form>

        <form method="post" action="aboutUs">
            <button>About Us</button>
        </form>
    </body>
</html>
