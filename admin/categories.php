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
      <form role="form" action="handler/cathandler.php" method="post">
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
          <button type="submit" class="btn btn-primary" name="categoryadd">Submit</button>
        </div>
        </div>
      </form>
      <div class="col-sm-3"></div>
      </section>
    </div>
</body>
</html>