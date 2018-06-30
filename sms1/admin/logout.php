<?php

    session_start();
    session_destroy();
    header("refresh : 1; url= ../login.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
</head>
<body>
   
    <h1 align="center" style="font-family : sans-serif;">Good Bye !</h1>
    <h3 align="center" style="font-family : sans-serif;">Have a great day</h3>
     
</body>
</html>