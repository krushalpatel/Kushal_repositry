<?php

$connection = mysqli_connect("localhost","root","","15618223086");

$query="SELECT * FROM `product_details`";

$query_excute=mysqli_query($connection,$query);

$number_records=mysqli_num_rows($query_excute);
echo"<form action='delete_product.php' method='get'>";
echo "<table border=1><tr><td>Product_id</td>
                          <td>Product_name</td> 
                          <td>Product_description</td>
                          <td>Product_category</td>
                          <td>Product_price</td>
                          <td>Product_sku</td>    
                          <td>Product_barcode</td>
                          <td>Product_weight</td>
                          <td>Product_dimensions</td>
                          <td>Product_quntity</td>
                          <td>Product_variants</td>
                          <td>Shipping_info</td>
                          <td>Seo_info</td>
                          <td>Product_barnd</td>
                          <td>Product_features</td>
                          <td>Product_benifits</td>
                          <td>Related_products</td>
                          <td>Product_reviews</td>
                          <td>Created_at</td>
                          <td>Image_filename</td>
                          <td>Delete Records</td></tr>";

for($i=1;$i<=$number_records;$i++)
{
    $fetch_rows=mysqli_fetch_row($query_excute);

    echo"<tr><td>$fetch_rows[0]</td>
             <td>$fetch_rows[1]</td>
             <td>$fetch_rows[2]</td>
             <td>$fetch_rows[3]</td>
             <td>$fetch_rows[4]</td>
             <td>$fetch_rows[5]</td>
             <td>$fetch_rows[6]</td>
             <td>$fetch_rows[7]</td>
             <td>$fetch_rows[8]</td>
             <td>$fetch_rows[9]</td>
             <td>$fetch_rows[10]</td>
             <td>$fetch_rows[11]</td>
             <td>$fetch_rows[12]</td>
             <td>$fetch_rows[13]</td>
             <td>$fetch_rows[14]</td>
             <td>$fetch_rows[15]</td>
             <td>$fetch_rows[16]</td>
             <td>$fetch_rows[17]</td>
             <td>$fetch_rows[18]</td>
             <td><img style='height: 200px;width=250px;' src = $fetch_rows[19]></td>
             <td><input type='checkbox' name='delete_records[]' value='$fetch_rows[0]'></td></tr>";

}
echo "</table>";
echo "<input type='submit' name='submit' value='delete'>";

 echo"</form>";
?>