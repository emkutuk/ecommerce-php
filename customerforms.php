<!DOCTYPE html>
<html lang="en">
<?php 
include "partials/head.php";
?>
<body class="animsition">
<?php 
include "partials/header.php";
?>
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl2 txt-center">
			Login or Register
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="handler/customerlogin.php" method="POST">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Log in
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="password">
						</div>
						<div class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30">
						<a href="forgotpass.php" style="color:black;">
							Forgot my password
						</a>
						</div>
						<button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="login">
							Log in
						</button>
					</form>
				</div>

				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="handler/customerregister.php" method="POST">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Register
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="password">
						</div>

						<div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password2" placeholder="verify your password">
						</div>
						<div class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" style="font-size: 17px;">
						<b>
						<?php
						if (session_status() == PHP_SESSION_NONE) {
							session_start();
						}
						//It creates captcha code from chars array randomly and dynamically and saves it to the session to be verified
						  $chars = ['A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z'];
						  $length = 5;
						  $captcha_code = '';
						
						  for ($i = 0; $i < $length; $i++) {
							$random_character = $chars[array_rand($chars)];
							$captcha_code .= $random_character;
						  }
						  echo $captcha_code;

						  $_SESSION['captcha'] = $captcha_code;
						?></b>
    					</div>
						<div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="captcha" placeholder="enter captcha">
						</div>
						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Register
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>	
	
	<?php 
	include "partials/footer.php";
	include "partials/scripts.php";
	?>

</body>
</html>