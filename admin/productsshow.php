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
                    Home
                    <small>Products</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Products</li>
                </ol>
            </section>
            <a href="products.php"><button style="color: green;">Add a Product</button></a>
            <div class="col-sm-9">
            <?php
            include("../partials/connect.php");

            $sql="SELECT * FROM products";
            $results=$connect->query($sql);
            while($final=$results->fetch_assoc()){ ?>
                <a href="proshow.php?pro_id=<?php echo $final['id'] ?>">
                <h3><?php echo $final['id'] ?>:<?php echo $final['name'] ?></h3><br>
                </a>
                <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">
                <button>Update Product</button>
                </a>
                <a href="prodelete.php?del_id=<?php echo $final['id'] ?>">
                <button style="color: red;">Delete Product</button>
                </a>
                <hr>
            <?php } ?>
            </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
</body>

</html>