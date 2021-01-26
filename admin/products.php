<!DOCTYPE html>
<html>
<?php
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
            <form role="form">
                <div class=" col-sm-6">
                    <div class="box-body">
                        <div class="form-group">
                            <h1>Add a Product</h1>
                            <label for="productName">Name</label>
                            <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="Enter product price">
                        </div>

                        <div class="form-group">
                            <label for="productImage">Image</label>
                            <input type="file" id="productImage">
                        </div>
                        <div class="form-group">
                            <label for="productCategory">Category</label>
                            <select id="productCategory">
                                <option>Mugs</option>
                                <option>Tshirt</option>
                                <option>Action Figure</option>
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="productDescription">Description</label>
                                <textarea id="productDescription" class="form-control" rows="10" placeholder="Enter product description"></textarea>
                            </div>
                        </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <div class="col-sm-3"></div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php
        include("adminpartials/adminfooter.php");
        ?>
</body>

</html>