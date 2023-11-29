<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add Product</h2>
        <form action="your-action-url" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pro_category">Category:</label>
                <input type="text" class="form-control" id="pro_category" name="pro_category" placeholder="Category Of Product">
            </div>
            <div class="form-group">
                <label for="pro_price">Price :</label>
                <input type="text" class="form-control" id="pro_price" name="pro_price" placeholder="Enter Price Of Product">
            </div>
            <div class="form-group">
                <label for="Pro_sku">Product_Sku :</label>
                <input type="text" class="form-control" id="Pro_sku" name="Pro_sku" placeholder="Enter Product Sku">
            </div>
            <div class="form-group">
                <label for="Pro_barcode">Barcode :</label>
                <input type="text" class="form-control" id="Pro_barcode" name="Pro_barcode" placeholder="Upload Barcode Of Product">
            </div>
            <div class="form-group">
                <label for="pro_weight">Product Weight :</label>
                <input type="text" class="form-control" id="pro_weight" name="pro_weight" placeholder="Enter Product Weight">
            </div>
            <div class="form-group">
                <label for="pro_dimensions">Product Dimensions :</label>
                <input type="text" class="form-control" id="pro_dimensions" name="pro_dimensions" placeholder="Enter Product Dimensions">
            </div>
            <div class="form-group">
                <label for="pro_color">Product Color :</label>
                <input type="text" class="form-control" id="pro_color" name="pro_color" placeholder="Enter Product Color">
            </div>
            <div class="form-group">
                <label for="pro_description">Product Description :</label>
                <textarea class="form-control" id="pro_description" name="pro_description" placeholder="Enter Product Description"></textarea>
            </div>
            <div class="form-group">
                <label for="pro_seo">About Product Seo Information :</label>
                <input type="text" class="form-control" id="pro_seo" name="pro_seo" placeholder="Enter About Product Seo Information">
            </div>
            <div class="form-group">
                <label for="pro_brand">Product Brand :</label>
                <input type="text" class="form-control" id="pro_brand" name="pro_brand" placeholder="Enter Brand Of Product">
            </div>
            <div class="form-group">
                <label for="pro_features">Product Features :</label>
                <input type="text" class="form-control" id="pro_features" name="pro_features" placeholder="Enter Features Of Product">
            </div>
            <div class="form-group">
                <label for="pro_benefits">Product Benefits :</label>
                <input type="text" class="form-control" id="pro_benefits" name="pro_benefits" placeholder="Enter Benefits Of Product">
            </div>
            <div class="form-group">
                <label for="pro_related">Related Product :</label>
                <input type="text" class="form-control" id="pro_related" name="pro_related" placeholder="Enter Related Product">
            </div>
            <div class="form-group">
                <label for="pro_variants">Product Variants :</label>
                <input type="text" class="form-control" id="pro_variants" name="pro_variants" placeholder="Enter Product Variants">
            </div>
            <div class="form-group">
                <label for="pro_download">Product Download :</label>
                <input type="text" class="form-control" id="pro_download" name="pro_download" placeholder="Enter Product Download Information">
            </div>
            <div class="form-group">
                <label for="pro_status">Product Status :</label>
                <select class="form-control" id="pro_status" name="pro_status">
                    <option value="">Choose Status</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pro_image">Product Image :</label>
                <input type="file" class="form-control" id="pro_image" name="pro_image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    
</body>
</html>