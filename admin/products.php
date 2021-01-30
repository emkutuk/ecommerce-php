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
            <form role="form" action="handler/producthandler.php" method="POST" enctype="multipart/form-data">
                <div class=" col-sm-6">
                    <div class="box-body">
                        <div class="form-group">
                            <h1>Add a Product</h1>
                            <label for="productName">Name</label>
                            <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="productName">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="Enter product price" name="productPrice">
                        </div>

                        <div class="form-group">
                            <label for="productImage">Image</label>
                            <input type="file" id="productImage" name="productImage">
                        </div>
                        <div class="form-group">
                            <label for="productCategory">Category</label>
                            <select id="productCategory" name="productCategory">
                                <?php
                                require "../partials/connect.php";
                                //It goes to the db and fetches all the categories, then lists them one by one
                                try
                                {
                                    $cat="SELECT * FROM categories";
                                    $results=mysqli_query($connect,$cat);

                                    while($row=mysqli_fetch_assoc($results))
                                    {
                                        echo "<option value=".$row['id'].">".$row['name']."</option>";                                            
                                    }
                                }
                                catch(Exception $e)
                                {
                                    echo $e->getMessage();
                                }                    
                                ?>
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="productDescription">Description</label>
                                <textarea id="productDescription" class="form-control" rows="10" placeholder="Enter product description" name="productDescription"></textarea>
                            </div>
                        </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" name="addproduct">Submit</button>
                    </div>
                </div>
            </form>
            <div class="col-sm-3"></div>
            </section>
        </div>
</body>

</html>