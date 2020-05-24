<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Crypto Expert</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" href="images/coin.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand l">CryptoExpert</a>
                    <button type="button" class="navbar-toggle" data-target="#nav" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="nav">
                    <div class="nav navbar-nav navbar-right">
                        <li><a href="blog.php" class="l">Blog</a></li>
                        <?php
                            $hostname = "localhost";
                            $username = "root";
                            $pass = "";
                            $database = "coin";
            
                            $connection = @mysqli_connect($hostname, $username, $pass, $database) or die(mysqli_connection_error() . "Database not connected");

                            if(isset($_SESSION["phone"]) && isset($_SESSION["email"])) {
                                $get = "SELECT * FROM user WHERE Email = '".$_SESSION["email"]."' AND Phone = '".$_SESSION["phone"]."'";
                                $query = @mysqli_query($connection, $get);
                                if(@mysqli_num_rows($query) > 0) {
                                    while($data = @mysqli_fetch_assoc($query)) {
                                        $name = $data["Firstname"];
                                    }
                                }
                        ?>
                        <li class="dropdown">
                            <a class="l dropdown-toggle" data-toggle="dropdown" style="color: #D4AF37 !important">Welcome <?php echo $name; ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php">Log out&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="login.php" class="l">Login&nbsp;&nbsp;<i class="fa fa-sign-in"></i></a></li>
                        <li><a href="register.php" class="l">Register&nbsp;&nbsp;<i class="fa fa-user-plus"></i></a></li>-->
                        <?php }else { ?>
                        <li><a href="login.php" class="l">Login&nbsp;&nbsp;<i class="fa fa-sign-in"></i></a></li>
                        <li><a href="register.php" class="l">Register&nbsp;&nbsp;<i class="fa fa-user-plus"></i></a></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="container" style="margin-top: 70px;background-color:rgba(0, 0, 0, 0.7);padding: 150px">
                <div class="row">
                    <div class="text-center">
                        <p style="color:#fff;padding-top: -30px">Trading Forex, CFDs and Cryptocurrencies is highly speculative, carries a level of risk and may not be suitable for all investors. Trading can generate significant benefits but also involves a risk of partial or full funds loss and should be considered by initial investors. we strongly advise that you read our terms & conditions and disclaimer page before making any investment. customers must be aware of their individual capital gain tax liability in their country of residence. It is against the law to solicit U.S.</p><br><br><br>
                        <a href="#" data-target="#regmodal" data-toggle="modal" class="regbtn">GET ACCESS NOW</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="modal fade" id="regmodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Open an Account</h5>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="name">First name</label>
                                <input type="text" required placeholder="First name" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last name</label>
                                <input required type="text" placeholder="Last name" class="form-control" name="lastname">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input required type="email" placeholder="E-mail" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input required type="text" placeholder="Phone" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <input required type="checkbox"> I agree to the Terms & Conditions*
                                <br><br>
                                <input type="submit" class="dismiss" value="Sign up" style="border: none" name="sub">
                            </div>
                        </form>
                        <?php
                $hostname = "localhost";
                $username = "root";
                $pass = "";
                $database = "coin";

                $connection = @mysqli_connect($hostname, $username, $pass, $database) or die(mysqli_connection_error() . "Database not connected");

                $name = @mysqli_real_escape_string($connection, $_POST["name"]);
                $lastname = @mysqli_real_escape_string($connection, $_POST["lastname"]);
                $email = @mysqli_real_escape_string($connection, $_POST["email"]);
                $phone = @mysqli_real_escape_string($connection, $_POST["phone"]);

                if(isset($_POST["sub"])) {
                    $sql = "INSERT INTO user(Firstname, Lastname, Email, Phone) VALUES('$name', '$lastname', '$email', '$phone')";
                    $insert = @mysqli_query($connection, $sql);
                    if($insert) {
                        header("Location: login.php");
            ?>
            <?php }else {?>
                <div class="alert alert-success alert-dismissable">
                    <a href="#"data-dismiss="alert" class="close">&times;</a>
                    <strong>Error during registration</string>
                </div>
        <?php }?>
        <?php } ?> 
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="dismiss">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin: 0;background-color: #D4AF37">
            <div class="container">
                <div class="row">
                    <h3>HOW TO START WITH BITCOIN CRYPTO-EXPERT?</h3><br>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <h3><span style="background-color: #D4AF37;color: #fff">&nbsp;1.&nbsp;</span>&nbsp;&nbsp;Open an Account</h3>
                        <br>
                        <p>Click on 'GET ACCESS NOW' and fill the form oR visit to Register page.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <h3><span style="background-color: #D4AF37;color: #fff">&nbsp;2.&nbsp;</span>&nbsp;&nbsp;Set the Trading</h3>
                        <br>
                        <p>Select the amount of money to invest and the amount to earn.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <h3><span style="background-color: #D4AF37;color: #fff">&nbsp;1.&nbsp;</span>&nbsp;&nbsp;Start Bitcoin Crypto-Expert</h3>
                        <br>
                        <p>Start Bitcoin trading on Crypto-Expert</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid cont">
            <br>
            <h2 class="text-center" style="color: #fff">REGISTER NOW AND START YOURJOURNEY TO CRYPTO MILLIONS WITH THE CRYPTO EXPERT SOFTWARE</h2><br>
        </div>
        <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div></div>
        <br><br>
        <div class="container">
            <p style="font-size: 11px"><b>Important Risk Note:</b> Trading Forex, CFDs and Cryptocurrencies is highly speculative, carries a level of risk and may not be suitable for all investors. Trading can generate significant benefits but also involves a risk of partial or full funds loss and should be considered by initial investors. we strongly advise that you read our terms & conditions and disclaimer page before making any investment. customers must be aware of their individual capital gain tax liability in their country of residence. It is against the law to solicit U.S. persons to buy and sell commodity options, even if they are called \prediction’ contracts, unless they are listed for trading and traded on a registered exchange or unless legally exempt.</p><p style="font-size: 11px"><b>Regulation Warning:</b> Bitcoin Crypto expert is a software created by a development company and does not provide investment or brokerage services. Bitcoin Crypto expert does not gain or lose profits based on your trading results and operates as a technology, marketing and advertising service. Bitcoin Crypto expert does not operate as a financial services firm and is only used as a marketing tool by third party advertisers and brokers to receive more customers. When you signup to Bitcoin Crypto expert a broker is automatically assigned to you. It is your obligation to check if the Broker applies to all local rules and regulations and is regulated in your jurisdiction and is allowed to receive customers from your location. If you find out the Broker that was assigned to you is not duly regulated in your jurisdiction please contact us using the support menu in the software.</p><p style="font-size: 11px"><b>Legal Restrictions:</b> without limiting the undermentioned provisions, you understand that laws regarding financial contracts vary throughout the world, and it is your responsibility to make sure you properly comply with any law, regulation or guideline in your country of residence regarding the use of the Site. To avoid any doubt, the ability to access our Site does not necessarily mean that our Services and/or your activities through the Site are legal under the laws, regulations or directives relevant to your country of residence.</p>
        </div>
        <br><br>
        <div class="footer">
            <div class="container">
                <br>
                <p class="pull-left">Copyright 2020 &copy;&nbsp;All right reserver</p>
                <p class="pull-right">Created by <b>David Chechelashvili</b></p>
            </div>
        </div>
    </body>
</html>
<?php ob_end_flush(); ?>