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
        <br>
        <br>
        <a href="products.php">
          <button>Add A Product</button>
          </a>
          <hr>
          <a href="categories.php">
          <button>Add A Category</button>
          </a>
          <hr>
      </section>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</body>

</html>