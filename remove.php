<?php
include("connection.php");

if(isset($_POST['remove']))
        {
            $id= $_POST['id'];

            $query = "DELETE FROM 'product1' WHERE id='$id' ";
            $query_run = mysqli_query($con,$query);

            if($query_run){
                $_SESSION['message'] = "Item has been Removed";
                $_SESSION['msg_type'] = "Success";
                header("location: stock.php");
            }
            else{
                $_SESSION['message'] = "Item not Deleted!";
                $_SESSION['msg_type'] = "Danger";
                header("location: stock.php");
            }
        
    }
?>