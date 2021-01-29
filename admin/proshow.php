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
            
            <div class="col-sm-9">
            <?php
            include("../partials/connect.php");

            $id=$_GET['pro_id'];
            $sql="SELECT * FROM products WHERE id='$id'";
            $results=$connect->query($sql);

            $final=$results->fetch_assoc();
            ?>

            <h3>Name: <?php echo $final['name']?></h3><hr><br>
            <h3>Price: <?php echo $final['price']?></h3><hr><br>
            <h3>Description: <?php echo $final['description']?></h3><hr><br>
            <img src="../<?php echo $final['picture']?>" alt="No File" style="width: 300px; height: 300px" >
            </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
</body>

</html>