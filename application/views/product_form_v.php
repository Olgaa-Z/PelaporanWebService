<!DOCTYPE html>
<html>       
<head>
    <meta charset="UTF-8">   
    <title>Input Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
</head>       
<body>
    <br><br><br>
    <div class="container"><p><a class="btn btn-info" href="<?php echo site_url('Product');?>">Data Product</a></p>

                    <form method="post" action="<?php echo site_url('Product/insert'); ?>" 
                          enctype="multipart/form-data"> 

                        <div class="form-group"> 
                            <label for="usr">Product ID :</label>
                            <input type="text" class="form-control" name="product_id" required="">
                        </div>

                        <div class="form-group"> 
                            <label for="usr">Product Name :</label>
                            <input type="text" class="form-control" name="product_name" required="">
                        </div>

                        <div class="form-group">
                            <label for="comment">Product Description :</label>
                            <textarea class="form-control" rows="15" name="product_description" required=""></textarea>
                        </div>

                        <div class="form-group"> 
                            <label for="usr">Product Stock :</label>
                            <input type="text" class="form-control" name="product_stock" required="">
                        </div>

                        <div class="form-group">
                            <label for="usr"> Product Price :</label>
                            <input type="text" class="form-control" name="product_price" required="">
                        </div>

                        <div class="form-group">
                            <label for="usr"> Product Image :</label>
                            <input type="file"  class="form-control" name="product_image" required="">
                        </div>

                        <div class="form-group">
                            <?php $category=$this->db->query("select * from category")-> result() ?>
                            <label for="usr"> Category :</label>
                            <select name="category_name"  class="form-control">
                                <?php foreach ($category as $key => $value) { ?>
                                    <option value="<?php echo $value->category_id  ?>"> <?php echo $value->category_name ?></option>
                                <?php  } ?>
                            </select>
                        </div>

                        <!-- <div class="form-group">
                        <label for="usr">Category</label>
                        <select class="form-control" name="category_name" >
                          
                          <option value="">-- Category--</option>
                          <?php foreach ($category as $a) { ?>
                            <option value="<?php echo $a->category_id?>"><?php echo $a->category_name; ?></option>
                          <?php } ?>
                        </select>
                      </div>
 -->

                        <button style ="margin-bottom:25px" class="btn btn-success" 
                                type="submit">Save</button>
                    </form>
                </div>       
   </body>
   </html>