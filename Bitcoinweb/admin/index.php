<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>CryptoExpert Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
        <link rel="icon" href="images/coin.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">CryptoExpert Dashboard</a>
                    <button type="button" class="navbar-toggle" data-target="#nav" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="nav">
                    <div class="nav navbar-nav">
                        <li><a href="">მთავარი</a></li>
                        <li><a href="add.php">სიახლის დამატება</a></li>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-stripped">
                <tr>
                    <th>ID</th>
                    <th>სახელი</th>
                    <th>გვარი</th>
                    <th>იმეილი</th>
                    <th>ტელეფონი</th>
                    <th>მომხმარებლის წაშლა&nbsp;&nbsp;<i class="fa fa-trash"></i></th>
                </tr>
                <?php
                    $hostname = "localhost";
                    $username = "root";
                    $pass = "";
                    $database = "coin";

                    $connection = @mysqli_connect($hostname, $username, $pass, $database) or die(mysqli_connection_error() . "Database not connected");
                    $query = @mysqli_query($connection, "SELECT * FROM user ORDER BY ID");

                    while($fetch = @mysqli_fetch_array($query)) {
                        $del = $fetch["ID"];
                ?>
                <tr>
                    <td><?php echo $fetch["ID"]; ?></td>
                    <td><?php echo $fetch["Firstname"]; ?></td>
                    <td><?php echo $fetch["Lastname"]; ?></td>
                    <td><?php echo $fetch["Email"]; ?></td>
                    <td><?php echo $fetch["Phone"]; ?></td>
                    <td><a href="delete.php?id=<?php echo $del ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php }?>
            </table>
        </div>
        </div>
    </body>
</html>
<?php ob_end_flush(); ?>