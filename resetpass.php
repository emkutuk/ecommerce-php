<?php
require 'partials/connect.php';

include 'partials/header.php';
include 'partials/head.php';
?>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
    <h2 class="ltext-105 cl2 txt-center">
        Password Reset
    </h2>
</section>

<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md m-auto">
                <form action="handler/passwordhandler.php" method="POST">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Welcome <b><?php
                        try
                        {
                            //I fetch email by using token to display it as welcome 'username'
                            $token = $_GET['token'];
                            $sql="SELECT * FROM tokens WHERE token='$token'";
                            $results=$connect->query($sql);
                            $final=$results->fetch_assoc();
                        
                            echo $final['username'];
                        }
                        catch(Exception $e)
                        {
                            echo $e->getMessage();
                        }
                        ?></b>
                    </h4>

                    <div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="new password">
						</div><div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password2" placeholder="repeat new password">
						</div>
                    <input type="hidden" name="token" value="<?php echo $token?>">
                    <input type="hidden" name="username" value="<?php echo $final['username']?>">
                    <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="approvepassword">
                        Change Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include 'partials/footer.php';
include 'partials/scripts.php';
?>