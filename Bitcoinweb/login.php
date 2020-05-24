<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Log in | Crypto Expert</title>
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
                                <input required type="text" placeholder="First name" class="form-control" name="name">
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
                                <input type="submit" class="dismiss" value="Sign up" style="border: none">
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
            ?>
                <div class="alert alert-success alert-dismissable">
                    <a href="#"data-dismiss="alert" class="close">&times;</a>
                    <strong>Registration successfully finished</string>
                </div>
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
        <br><br>
        <div class="container" id="section1">
            <h2 class="text-center">Log in</h2>
            <form method="post" action="">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input required type="email" placeholder="E-mail" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input required type="text" placeholder="Phone" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <input type="submit" class="dismiss" value="Log in" style="border: none" name="log">
                </div>
            </form>
            <?php
                if(isset($_POST["log"])) {
                    $_SESSION["phone"] = $_POST["phone"];
                    $_SESSION["email"] = $_POST["email"];
                    header("Location: index.php");
                }
            ?>
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