<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Login System</title>
</head>
<body>
   <h1 align="center">Welcome to Student Management System</h1>
   <h3 align="right"><a href="login.php">Admin Login</a></h3>
   
   <form action="index.php" method="post">
   <table style="width:50%;" align="center">
       <tr>
           <th colspan="2" align="center">Student Information</th>
       </tr>
       <tr>
           <td align="right">Choose Standard</td>
           <td>
               <select name="standard">
                   <option value="1">1st</option>
                   <option value="2">2nd</option>
                   <option value="3">3rd</option>
                   <option value="4">4th</option>
                   <option value="5">5th</option>
                   <option value="6">6th</option>
                   <option value="7">7th</option>
                   <option value="8">8th</option>
                   <option value="9">9th</option>
                   <option value="10">10th</option>
                   <option value="11">11th</option>
                   <option value="12">12th</option>
               </select>
           </td>
       </tr>
       <tr>
           <td align="right">Enter Roll no</td>
           <td><input type="text" name="rollno" required autocomplete="off"></td>
       </tr>
       <tr>
           <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
       </tr>
   </table>
   </form>
</body>
</html>


<?php

if(isset($_POST['submit']))
{
    $standard = $_POST['standard'];
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('function.php');
    
    showdetails($standard, $rollno);
}

?>




















