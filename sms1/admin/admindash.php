<?php

session_start();

    if(isset($_SESSION['uid']))
    {
        echo "";
    }
    else
    {
        header('location: ../login.php');
    }

?>

<?php
    include('header.php'); 
?>
    <div class="admintitle">
        <h1>Welcome to Admin Dashboard</h1>
        <h4 align="center"><a href="logout.php" class="logout">Log Out</a></h4>
    </div>
    <div class="dashboard">
        <div class="container">
            <span><a href="addstudent.php" class="cont-font">Add Student</a></span>
        </div>
        <div class="container">
            <span><a href="updatestudent.php" class="cont-font">Update Student</a></span>
        </div>
        <div class="container">
            <span><a href="deletestudent.php" class="cont-font">Delete Student</a></span>
        </div>
    </div>
           
            
</body>
</html>