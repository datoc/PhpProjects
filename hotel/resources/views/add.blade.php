<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Hotel&nbsp;-&nbsp;Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="hic.png">
        <link  rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <br>
            <div class="container col-sm-12 col-xs-12 col-md-4 col-lg-4">
                <br><br>
                @if(count($errors) > 0 && session("adds") == 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger fade in">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>{{$error}}</strong>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Perfect!</strong>
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Add news</h3></div>
                    <div class="panel-body">
                        <form method="post" action="insert" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input type="text" placeholder="Description" class="form-control" name="desc">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" placeholder="Date; e.g 23 August, 2020" class="form-control" name="date">
                            </div>
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="insert" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
            <div class="container col-sm-12 col-xs-12 col-md-7 col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Add room</h3></div>
                    <div class="panel-body">
                        <form method="post" action="addroom" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" placeholder="Title" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="persons">Persons</label>
                                <input type="text" placeholder="Persons number" name="persons" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="size">Room Size</label>
                                <input type="text" placeholder="Room size" name="size" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="view">View</label>
                                <input type="text" placeholder="View" name="view" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" placeholder="Price" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="img" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add room" class="btn btn-success" name="room">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>