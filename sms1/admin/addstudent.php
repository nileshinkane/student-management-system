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
    include('titlehead.php');
?>
<form action="addstudent.php" method="post" enctype="multipart/form-data" align="center">
   <table align="center">
       <tr>
           <th>Roll No.</th>
           <td><input type="text" name="rollno" placeholder="Enter Roll No." required></td>
       </tr>
       <tr>
           <th>Full Name</th>
           <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
       </tr>
       <tr>
           <th>City</th>
           <td><input type="text" name="city" placeholder="Enter City" required></td>
       </tr>
       <tr>
           <th>Parents Contact Number</th>
           <td><input type="text" name="pcon" placeholder="Enter Parents' Contact Number" required></td>
       </tr>
        <tr>
           <th>Standard</th>
           <td><input type="number" name="std" placeholder="Enter Standard" required></td>
       </tr>
       <tr>
           <th>Image</th>
           <td><input type="file" name="simg" required></td>
       </tr>
       <tr>
           <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
       </tr>
   </table>
</form>
<hr>     
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include('../dbcon.php');
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcon = $_POST['pcon'];
        $std = $_POST['std'];
        $imagename = $_FILES['simg']['name'];
        $tempname = $_FILES['simg']['tmp_name'];
        
        move_uploaded_file($tempname,"../dataimg/$imagename");
        
        
        $qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
        
        $run = mysqli_query($con,$qry);
        if($run == TRUE)
        {
            ?>
                <script>
                    alert('Data Inserted Succesfully');  
                </script>
            <?php
        }
    }
?>


















