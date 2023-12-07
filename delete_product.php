<?php

$my_selected_id=$_GET['delete_records'];

$connection=mysqli_connect("localhost","root","","15618223086");

foreach($my_selected_id as $myid)
{

    $query="DELETE FROM `product_details` WHERE product_id=$myid";
    $query_execute=mysqli_query($connection,$query);
}

header("Location:view_product.php");

?>