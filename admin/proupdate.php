<!DOCTYPE html>
<html>
<?php
include("adminpartials/session.php");
include("adminpartials/adminhead.php");
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
        include("adminpartials/adminheader.php");
        include("adminpartials/adminaside.php");
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <div class="col-sm-3"></div>
            <form role="form" action="proupdatehandler.php" method="POST" enctype="multipart/form-data">
            <?php 
            $newid=$_GET['up_id'];
            include("../partials/connect.php");

            $sql="SELECT * FROM products WHERE id = '$newid'";

            $results=$connect->query($sql);
            $final=$results->fetch_assoc();

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
                                $cat="SELECT * FROM categories";
                                $results=mysqli_query($connect,$cat);

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

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="hidden" value="<?php echo $final['id']?>" name="form_id">      
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </div>
                </div>
            </form>
            <div class="col-sm-3"></div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
</body>

</html>