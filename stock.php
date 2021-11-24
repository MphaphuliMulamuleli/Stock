
<?php require_once 'remove.php';?>
<?php require_once 'add.php';?>
<html>
    <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">STOCK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          </a>
         
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>
<?php
        if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
       </div> 
        <?php endif ?>
<div class="container">
  <div class="row">
    <div class="col">
    <h4>Product 1</h4>
    <form method="post" action="add.php">
        <table>
            <tr>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Item Code</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productcode" required>
            </div>
            </tr>

            <tr>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Item Name</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productname" required>
            </div>

            </tr>
            <tr>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Item Price</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productprice" required>
            </div>
            </tr>
            <tr>
                <td><input type="submit" value="Add" name="product1" class="btn btn-success"></td>
            </tr>
        </table>
    </form>
    </div>
    <div class="col">
    <h4>Product 2</h4>
    <form method ="post" action="add.php">
        <table>
            <tr>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Item Code</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productcode" required>
            </div>
            </tr>
            <tr>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Item Name</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productname" required>
            </tr>
            <tr>
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Item Price</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productprice" required>
            </tr>
            <tr>
                <td><input type="submit" value="Add" name="product2" class="btn btn-success"></td>
            </tr>
            </table>
    </form>
    </div>
    <div class="col">
    <h4>Product 3</h4>
    <form method ="post" action="add.php">
        <table>
            <tr>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Item Code</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productcode" required>
            </tr>
            <tr>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Item Name</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productname" required>
                
            </tr>
            <tr>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Item Price</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="productprice" required>
             
            </tr>
            <tr>
                <td><input type="submit" value="Add" name="product3" class="btn btn-success"></td>
            </tr>
            </table>
    </form>
    </div>
  </div>
</div>
  

<div class="container">
  <div class="row">
    <div class="col">
    <h5>STOCK LEVEL</h5>
    <table class="table" style="width:10%;">
        
        <?php
        include("connection.php");
        $query = "SELECT id FROM product1 ORDER BY id";
        $query_run = mysqli_query($con, $query)
    ?>
        <tr>
            <td>PRODUCT01</td>
            <td><?php echo $row = mysqli_num_rows($query_run);?></td>
        </tr>
        <tr>
        <?php
           $connection = mysqli_connect("localhost","root","","stock");
           $query = "SELECT AVG(Product_Price) AS avg FROM product1";
           $query_result = mysqli_query($connection, $query);
               while($row = mysqli_fetch_assoc($query_result)){
                   $output1 = $row['avg'];
               }
         ?>
            <td><?php echo round($output1);?></td>
        </tr>
        <tr>
        <?php
            include("connection.php");
            $query = "SELECT id FROM product2 ORDER BY id";
            $query_run = mysqli_query($con, $query)
        ?>
            <td>PRODUCT02</td>
            <td><?php echo $row = mysqli_num_rows($query_run);?></td>
        </tr>
        <tr>
        <?php
            $query = "SELECT AVG(Product_Price) AS avg FROM product2";
            $query_result = mysqli_query($con, $query);
            while($row = mysqli_fetch_assoc($query_result)){
            $output2 = $row['avg'];
            }
         ?>
            <td><?php echo round($output2) ?></td>
        </tr>
        <tr>
        <?php
            include("connection.php");
            $query = "SELECT id FROM product3 ORDER BY id";
            $query_run = mysqli_query($con, $query)
        ?>
            <td>PRODUCT03</td>
            <td><?php echo $row = mysqli_num_rows($query_run);?></td>
        </tr>
        <tr>
        <?php
            $query = "SELECT AVG(Product_Price) AS avg FROM product2";
            $query_result = mysqli_query($con, $query);
            while($row = mysqli_fetch_assoc($query_result)){
            $output3 = $row['avg'];
            }
         ?>
            <td><?php echo round($output3) ?></td>
        </tr>
    </table>
    </div>
    <div class="col">
    <h4>REMOVE STOCK</h4>
    <form method ="post" action="remove.php">
        <table>
            <tr>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Item Code</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="code" required>
            </tr>
            <tr>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="email" required>
               
            </tr>
            <tr>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Item Bought</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="itmebought" required>
            </tr>
            <tr>
                <td><input type="submit" value="Remove" name="remove" class="btn btn-danger"></td>
            </tr>
            </table>
    </form>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
    
</body>
</html