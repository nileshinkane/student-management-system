<?php



        include('../dbcon.php');   
        
        $id = $_REQUEST['sid'];
        
        $qry = "DELETE FROM `student` WHERE `id`= '$id';";
        
        $run = mysqli_query($con,$qry);
        if($run == TRUE)
        {
            ?>
                <script>
                    alert('Data Deleted Succesfully');
                    window.open('deletestudent.php','_self');
                </script>
            <?php
        }



?>