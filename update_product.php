
<html>

    <head>
        <title>Product details</title>
    </head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <body>
 <div class="container">       
    <div class="row">
   <div class="col-6">
    <h2 class="disply-2">Update Product </h2>
    
<?php $connection = mysqli_connect("localhost","root","","15618223086");

$query="SELECT * FROM `product_details`";

$query_excute=mysqli_query($connection,$query);

$fetch_data=mysqli_fetch_row($query_excute);
?>

<form action="edit.php" method="get"  >
      Name   : <input type="text"class="form-control" name="name" value="<?php echo $fetch_data[0] ?>"><br>
    E-mail  : <input type="text"class="form-control" name="email" value="<?php echo $fetch_data[1] ?>"><br>
    Mobile : <input type="text"class="form-control" name="mono" value="<?php echo $fetch_data[2] ?>"><br>
    City     : <input type="text" class="form-control" name="city" value="<?php echo $fetch_data[3] ?>"><br>
    <input type="submit" name="submit" value="Submit">
    <script src="js/bootstrap.bundle.min.js" ></script>

</form>
</div>
</div>
</div>

    </body>
   
</html>