 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>
     <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="post">
         <input type="text" name="name" placeholder="Enter your name">
         <input type="text" name="email" placeholder="Enter your email">
         <input type="submit" name="submit" value="Submit">
     </form>

 </body>

 </html>

 <?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];



        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
        }

        session_start();
        header("Location: home.php");
    }




    ?>