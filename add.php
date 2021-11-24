<?php
session_start();
    include("connection.php");

  
    if(isset($_POST['product1']))
        {
            $product_code = $_POST['productcode'];
            $product_name = $_POST['productname'];
            $product_price = $_POST['productprice'];
            
            if(!empty($product_code) && !empty($product_name)){

            $query = "INSERT INTO product1 (Product_Code,Product_Name,Product_Price) VALUES ('$product_code','$product_name','$product_price')";

                mysqli_query($con, $query);
            $_SESSION['message'] = "Item has been Added";
            $_SESSION['msg_type'] = "Success";
            header("location: stock.php");
            }


        }
       
        if(isset($_POST['product2']))
        {
            $product_code = $_POST['productcode'];
            $product_name = $_POST['productname'];
            $product_price = $_POST['productprice'];

            if(!empty($product_code) && !empty($product_name)){
                
                $query = "INSERT INTO product2 (Product_Code,Product_Name,Product_Price) VALUES ('$product_code','$product_name','$product_price')";

                mysqli_query($con, $query);
            $_SESSION['message'] = "Item has been Added";
            $_SESSION['msg_type'] = "Success";
            header("location: stock.php");
            }
        
        }

        if(isset($_POST['product3']))
        {
            $product_code = $_POST['productcode'];
            $product_name = $_POST['productname'];
            $product_price = $_POST['productprice'];
        
                
                $query = "INSERT INTO product3 (Product_Code,Product_Name,Product_Price) VALUES ('$product_code','$product_name','$product_price')";

                mysqli_query($con, $query);
            $_SESSION['message'] = "Item has been Added";
            $_SESSION['msg_type'] = "Success";
            header("location: stock.php");
            }

       

?>

