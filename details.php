<!DOCTYPE html>
<html lang="en">
<?php
include("handler/customersession.php");
include("partials/head.php");
?>

<body class="animsition">
	<?php
	include("partials/header.php");
	?>
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<?php
				require "partials/connect.php";
				try{
					//Due to website listing only one item, here I limit query to fetch only 1 row. That one product can be removed, updated or added again via Admin Panel
					$sql = "SELECT * FROM products LIMIT 1";
					$results = $connect->query($sql);
					$final = $results->fetch_assoc();
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
				?>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="<?php echo $final['picture'] ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?php echo $final['picture'] ?>" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $final['picture'] ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $final['name'] ?>
						</h4>

						<span class="mtext-106 cl2">
							€ <?php echo $final['price'] ?>
						</span>
					
						<p class="stext-102 cl3 p-t-23">
							<?php echo $final['description'] ?>
						</p>
						<p class="stext-102 cl3 p-t-23">
							Category: <?php 
							require "partials/connect.php";
							try
							{
								//Categoies table and products table are connected to each other via category id(Foreign Key)
								$category_id = $final['category_id'];		
								$catsql="SELECT * FROM categories WHERE categories.id='$category_id'";
								$catresults = $connect->query($catsql);
								$category = $catresults->fetch_assoc();

								echo $category['name'];
							}
							catch(Exception $e)
							{
								echo $e->getMessage();
							}
							?>
						</p>
						<div class="flex-w flex-r-m p-b-10">
							<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
								Buy Now!
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<?php
		include("partials/footer.php");
		include("partials/scripts.php");
	?>
</body>
</html>