<?php

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

        <h3>Please fill in your details</h3>

        <form method="post" action="home">
            <p>Name: <input type="text" name="name"></p> 
            <p>Phone No.: <input type="number" name="phoneNo"></p> 
            <p>Email: <input type="email" name="email"></p> 
            <button>Submit</button>
        </form>    
        <?php
            if($name != ''){
                echo $dbStatus.'.<br/>';
                echo 'Your name is '.$name.'.<br/>';
                echo 'Your phone number is '.$phoneNo.'.<br/>';
                echo 'Your email is '.$email.'.<br/>';
            }
        ?>
    </body>
</html>
