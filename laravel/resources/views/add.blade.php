<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">DASHBOARD</a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="container-fluid">
            <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                <div class="nav nav-pills nav-stacked">
                    <li><a href="users"><i class=" fa fa-user"></i>&nbsp;&nbsp;Users</a></li>
                    <li><a href="add"><i class=" fa fa-user-plus"></i>&nbsp;&nbsp;Add&nbsp;user</a></li>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <form method="post" action="insert" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last&nbsp;name</label>
                        <input type="text" class="form-control" placeholder="Last name" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="mail">E-mail</label>
                        <input type="text" class="form-control" placeholder="E-mail" name="mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Upload avatar</label>
                        <input type="file" name="avatar" class="btn btn-danger">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add" class="btn btn-success">
                    </div>
                </form>
                @if(count($errors) > 0) 
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <strong>{{$error}}</strong><br>  
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>