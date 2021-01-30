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
    </div>
  </div>
</body>

</html>