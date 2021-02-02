	<?php
	require "partials/connect.php";
	?>

	<!-- Header -->
	<header>
		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
				<?php 
						//Checks if session has already started, starts one if no
						if (session_status() == PHP_SESSION_NONE) 
						{
							session_start();
						}
						//Checks if an user has logged in or not and display a message accordingly
						if(empty($_SESSION['email']))
						{
							echo "Welcome Stranger";
						}
						else
						{
							echo $_SESSION['email'];
						}
						?>
				</div>
				<div class="right-top-bar flex-w h-full">
					<?php 
						if(empty($_SESSION['email']))
						{
							echo "<a href='customerforms.php' class='flex-c-m trans-04 p-lr-25'>
							Login or Register</a>";
						}
						else
						{
							echo "<a href='handler/customerlogout.php' class='flex-c-m trans-04 p-lr-25'>
							Logout</a>";
						}
					?>
				</div>
				
			</div>
		</div>
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="admin/adminlogin.php">Admin Login</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>