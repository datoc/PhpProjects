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
                    <br>
                </div>
            </div>
            <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12 table-responsive">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>ID&nbsp;&nbsp;<i class="fa fa-id-card"></i></th>
                        <th>Avatar&nbsp;&nbsp;<i class="fa fa-picture-o"></i></th>
                        <th>Name&nbsp;&nbsp;<i class="fa fa-user"></i></th>
                        <th>Last name&nbsp;&nbsp;<i class="fa fa-user"></i></th>
                        <th>E-mail&nbsp;&nbsp;<i class="fa fa-envelope"></i></th>
                        <th>Password&nbsp;&nbsp;<i class="fa fa-key"></i></th>
                        <th>Delete&nbsp;&nbsp;<i class="fa fa-trash"></i></th>
                        <th>Edit&nbsp;&nbsp;<i class="fa fa-pencil"></i></th>
                    </tr>
                    @foreach($data as $datas)
                        <tr>
                            <td>{{$datas->id}}</td>
                            <td><img src="{{"images/" . $datas->avatar}}" style="width:50px;height:50px"></td>
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->lastname}}</td>
                            <td>{{$datas->email}}</td>
                            <td>{{$datas->password}}</td>
                            <td><a href="delete/{{$datas->id}}" class="btn btn-danger">Delete&nbsp;&nbsp;<i class="fa fa-trash"></i></a></td>
                            <td><a href="{{$datas->id}}" class="btn btn-info">Edit&nbsp;&nbsp;<i class="fa fa-pencil"></i></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>