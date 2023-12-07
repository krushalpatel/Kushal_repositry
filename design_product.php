<html>
    <head>
        <title>Product details</title>
    </head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <body>
 <div class="container">       
    <div class="row">
   <div class="col-6">
    <h2 class="disply-2">Product details</h2>
<form action="code_product.php" method="get"  >
    Product_name   : <input type="text"class="form-control" name="pname"><br>
    Product_description  : <input type="text"class="form-control" name="Pdes"><br>
    Product_category  : <input type="text"class="form-control" name="category"><br>
    Product_price     : <input type="number" class="form-control"name="price"><br>
    Product_sku       : <input type="text"class="form-control" name="sku"><br>
    Product_barcode   : <input type="text"class="form-control" name="barcode"><br>
    Product_weight    : <input type="number"class="form-control" name="weigth"><br>
    Product_dimensions: <input type="text" class="form-control" name="dimensions"><br>
    Product_quntity  : <input type="number"class="form-control" name="quntity"><br>
    Product_variants  : <input type="text" class="form-control" name="variants"><br>
    Shipping_info     : <input type="text"  class="form-control" name="shipping"><br>
    Seo_info          : <input type="text" class="form-control" name="seo"><br>
    Product_barnd    : <input type="text"  class="form-control" name="brand"><br>
    Product_features : <input type="text" class="form-control" name="features"><br>
    Product_benifits  : <input type="text" class="form-control" name="benifits"><br>
    Related_products   : <input type="text" class="form-control" name= "related"><br>
    Product_reviews   : <input type="text" class="form-control" name="reviews"><br>
    Created_at       : <input type="text" class="form-control" name="created "><br>
    Image_filename    : <input type="file"  class="form-control" name="image"><br>

    <input type="submit" name="submit" value="Submit">
    <script src="js/bootstrap.bundle.min.js" ></script>

</form>
</div>
</div>
</div>  
    </body>
</html>