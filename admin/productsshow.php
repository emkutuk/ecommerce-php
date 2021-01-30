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
                    Home
                    <small>Products</small>
                </h1>
            </section>
            <a href="products.php"><button style="color: green;">Add a Product</button></a>
            <div class="col-sm-9">
            <?php
            require "../partials/connect.php";

            try
            {
                $sql="SELECT * FROM products";
                $results=$connect->query($sql);
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }
            //Through a while loop it lists each product that exists in the database
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
        </div>
</body>

</html>