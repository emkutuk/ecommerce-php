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
      <form role="form" action="cathandler.php" method="post">
        <div class=" col-sm-6">
        <div class="box-body">
          <div class="form-group">
            <h1>Add a Category</h1>
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" placeholder="Enter a category" name="name">
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