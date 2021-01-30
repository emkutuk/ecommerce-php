<!DOCTYPE html>
<html>
<?php
include "adminpartials/session.php";
include "adminpartials/adminhead.php";
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
        include "adminpartials/adminheader.php";
        include "adminpartials/adminaside.php";
        ?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
            </section>
            <div class="col-sm-3"></div>
            <form role="form" action="handler/proupdatehandler.php" method="POST" enctype="multipart/form-data">
            <?php 
            $newid=$_GET['up_id'];
            require "../partials/connect.php";
            //I get product data here to list already existed data on UPDATE page
            try
            {
                $sql="SELECT * FROM products WHERE id = '$newid'";

                $results=$connect->query($sql);
                $final=$results->fetch_assoc();    
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }
            ?>
                <div class=" col-sm-6">
                    <div class="box-body">
                        <div class="form-group">
                            <h1>Add a Product</h1>
                            <label for="productName">Name</label>
                            <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="productName" value="<?php echo $final['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="Enter product price" name="productPrice" value="<?php echo $final['price'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="productImage">Image</label>
                            <input type="file" id="productImage" name="productImage" value="<?php echo $final['picture'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="productCategory">Category</label>
                            <select id="productCategory" name="productCategory" value="<?php echo $final['category'] ?>">
                                <?php
                                try
                                {
                                    $cat="SELECT * FROM categories";
                                    $results=mysqli_query($connect,$cat);
                                }
                                catch(Exception $e)
                                {
                                    echo $e->getMessage();
                                }
                                while($row=mysqli_fetch_assoc($results))
                                {
                                    echo "<option value=".$row['id'].">".$row['name']."</option>";                                            
                                }
                                
                                ?>
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="productDescription">Description</label>
                                <textarea id="productDescription" class="form-control" rows="10" placeholder="Enter product description" name="productDescription"><?php echo $final['description'] ?></textarea>
                            </div>
                        </div>
                    <div class="box-footer">
                        <input type="hidden" value="<?php echo $final['id']?>" name="form_id">      
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </div>
                </div>
            </form>
            <div class="col-sm-3"></div>
            </section>
        </div>
</body>

</html>