<?php
    require_once('vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $contactPerson =  $_ENV['contactPerson'];
    $contactNum =  $_ENV['contactNumber'];
?>

<html>
    <body>
        <h1>Contact Us</h1>
        <p>please contact <?php echo $contactPerson?> at <?php echo $contactNum?></p>
    </body>
</html>