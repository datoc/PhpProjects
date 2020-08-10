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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div class="headerlayer">
                <div class="container" id="top">
                    <div class="info">
                        <div class="circle text-center"><i class="fa fa-phone"></i></div>
                        <span class="text-center">1234&nbsp;-&nbsp;1234&nbsp;-&nbsp;1234</span>
                    </div>
                    <div class="info">
                        <div class="circle text-center"><i class="fa fa-map-marker"></i></div>
                        <span class="text-center">Lincoln 55 New York, NY</span>
                    </div>
                    <div class="lang">
                        <div class="dropdown">
                            <span class="dropdown-toggle" data-toggle="dropdown">ENG&nbsp;<i class="fa fa-caret-down"></i></span>
                            <ul class="dropdown-menu" style="z-index: 3;">
                                <li><a href="#"><img src="img/russia.jpg" style="width: 20px;height: 15px">&nbsp;&nbsp;RUS</a></li>
                                <li><a href="#"><img src="img/georgia.jpg" style="width: 20px;height: 15px">&nbsp;&nbsp;GEO</a></li>
                                <li><a href="#"><img src="img/spain.jpg" style="width: 20px;height: 15px">&nbsp;&nbsp;ESP</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                </div>
                <div class="container">
                    <div class="navbar navbar-default">
                        <div class="navbar-header">
                            <a href="http://localhost:8080/hotel/public/" class="navbar-brand" style="font-size: 30px;color:#fff">Hotel</a>

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="nav">
                            <div class="nav navbar-nav navbar-right">
                                <li><a style="color:#fff" href="http://localhost:8080/hotel/public/">Home</a></li>
                                <li><a style="color:#fff" href="accomodation">Accomodation</a></li>
                                <li><a style="color:#fff" href="book">Booking</a></li>
                                <li><a style="color:#fff" href="contact">Contact&nbsp;Us</a></li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center">
                    <h1 class="text-center" style="color:#fff; font-size: 55px;font-family: 'comforta';">Luxorious Spa <br>Experience</h1>
                </div><br><br>
                <center>
                <a href="/accomodation" class="header-btn">View rooms&nbsp;&nbsp;<i class="fa fa-bed"></i></a></center>
                <br><br><br><br>
                <div class="container bg-dark">
                    <div class="container">
                        <div class="form-group">
                            <label for="checkin">Check In</label><br>
                            <input type="date" name="checkin">
                        </div>
                        <div class="form-group">
                            <label for="checkout">Check Out</label><br>
                            <input type="date" name="checkout">
                        </div>
                        <div class="form-group">
                            <label for="guests">Guests</label><br>
                            <input type="text" placeholder="Guests (0)" name="guests">
                        </div>
                        <div class="form-group">
                            <button type="button" class="text-center bt">Check&nbsp;Availability</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <br>
            <h1 class="text-center" style="font-size: 40px;"><strong>Our&nbsp;Hotels</strong></h1>
            <br>
            <center><div class="line text-center"></div></center>
            <br>
            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam error cupiditate, rem possimus sint quaerat eos ducimus culpa quisquam vitae dicta fugit nam magnam, magni iste! Mollitia dignissimos iste ullam.</p>
            <br><br>
            <div class="row">
                <div class="hotels col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h1>New York City</h1>
                    <div class="right text-center"><i class="fa fa-caret-right" style="padding-top: 30px;"></i></div>
                </div>
                <div class="hotels col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h1>London</h1>
                    <div class="right text-center"><i class="fa fa-caret-right" style="padding-top: 30px;"></i></div>
                </div>
                <div class="hotels col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h1>Los Angeles</h1>
                    <div class="right text-center"><i class="fa fa-caret-right" style="padding-top: 30px;"></i></div>
                </div>
            </div>
            <div class="row">
                <div class="hotels col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h1>Gori</h1>
                    <div class="right text-center"><i class="fa fa-caret-right" style="padding-top: 30px;"></i></div>
                </div>
                <div class="hotels col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h1>Tbilisi</h1>
                    <div class="right text-center"><i class="fa fa-caret-right" style="padding-top: 30px;"></i></div>
                </div>
                <div class="hotels col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h1>Madrid</h1>
                    <div class="right text-center"><i class="fa fa-caret-right" style="padding-top: 30px;"></i></div>
                </div>
            </div>
            <br><br>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 col-sm-12 b">
                    <br>
                    <h3>Premium&nbsp;Room</h3><br>
                    <div class="line"></div>
                    <br>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-caret-right" style="color: #B1986F"></i>&nbsp;&nbsp;Max&nbsp;occupancy:&nbsp;2&nbsp;Person(s)</li><br>
                        <li><i class="fa fa-caret-right" style="color: #B1986F"></i>&nbsp;&nbsp;Size:&nbsp;40&nbsp;-&nbsp;60-sqm&nbsp;/&nbsp;370&nbsp;-&nbsp;400&nbsp;sqf</li><br>
                        <li><i class="fa fa-caret-right" style="color: #B1986F"></i>&nbsp;&nbsp;View: City</li><br>
                        <li><i class="fa fa-caret-right" style="color: #B1986F"></i>&nbsp;&nbsp;Accomodation:&nbsp;2&nbsp;Room(s)</li><br>
                    </ul>
                    <br><br>
                    <button type="button" class="text-center bt">From&nbsp;$200.00&nbsp;Per&nbsp;Night&nbsp;&nbsp;<i class="fa fa-caret-right"></i></button>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 col-sm-12 d"></div>
            </div>
        </div>
        <div class="container">
            <br><br>
            <div class="row">
                <div class="container con col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="square text-center">
                        <i class="fa fa-wifi"></i>
                    </div><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, quis illum consectetur corrupti alias.</p>
                </div>
                <div class="container con col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="square text-center">
                        <i class="fa fa-wifi"></i>
                    </div><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, quis illum consectetur corrupti alias.</p>
                </div>
            </div><br><br>
            <div class="row">
                <div class="container con col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="square text-center">
                        <i class="fa fa-wifi"></i>
                    </div><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, quis illum consectetur corrupti alias.</p>
                </div>
                <div class="container con col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="square text-center">
                        <i class="fa fa-wifi"></i>
                    </div><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, quis illum consectetur corrupti alias.</p>
                </div>
            </div>
            <br><br>
        </div>
        <div class="container">
            <br>
            <h1 class="text-center" style="font-size: 40px;"><strong>Latest&nbsp;News</strong></h1>
            <br>
            <center><div class="line text-center"></div></center>
            <br>
            <div class="row">
                @foreach($data as $news)
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 blocks">
                        <img src="img/{{$news->image}}" class="img-responsive">
                        <br>
                        <p>{{$news->description}}</p>
                        <strong>{{$news->date}}</strong>
                        <br>
                        <a href="details/{{$news->id}}"><button type="button" class="bt">Read more</button></a>
                    </div>
                @endforeach
                <hr>
                <center><a href="news" class="text-center"><button type="button" class="bt">Show more</button></a></center>
            </div>
            <br><br>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <h3 style="color: #fff">HOTEL</h3>
                        <br><br>
                        <p style="color: #fff">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque minus saepe voluptas iusto eos asperiores architecto nemo. Ducimus, tempora veniam at amet quia.</p>
                        <br>
                        <div class="infos">
                            <div class="circle text-center"><i class="fa fa-facebook"></i></div>
                        </div>
                        <div class="infos">
                            <div class="circle text-center"><i class="fa fa-twitter"></i></div>
                        </div>
                        <div class="infos">
                            <div class="circle text-center"><i class="fa fa-youtube"></i></div>
                        </div>
                        <div class="infos">
                            <div class="circle text-center"><i class="fa fa-instagram"></i></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="overflow: hidden">
                        <h3 style="color: #fff">CONTACT</h3>
                        <br><br>
                        <p><i class="fa fa-map-marker" style="color: #B1986F"></i>&nbsp;&nbsp;<span class="text-center" style="color: #fff">Lincoln 55 New York, NY</span></p>
                        <hr width="200" align="left">
                        <p><i class="fa fa-mobile" style="color: #B1986F"></i>&nbsp;&nbsp;<span class="text-center" style="color: #fff">1234 - 1234 - 1234</span></p>
                        <hr width="200" align="left">
                        <p><i class="fa fa-envelope" style="color: #B1986F"></i>&nbsp;&nbsp;<span class="text-center" style="color: #fff">hotel@info.com</span></p>
                        <hr width="200" align="left">
                        <p><i class="fa fa-phone" style="color: #B1986F"></i>&nbsp;&nbsp;<span class="text-center" style="color: #fff">234 65 665</span></p>
                        <hr width="200" align="left">
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12" style="overflow: hidden">
                        <h3 style="color: #fff">NEWSLETTER</h3>
                        <br><br>
                        <p style="color: #fff">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque minus saepe voluptas.</p>
                        <br>
                        <form method="post" action="subscribe">
                            @csrf
                            <div class="form-group">
                                <input type="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Subscribe" class="bt" style="color: #fff">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="bottom text-center">
                <div class="row">
                    <div class="container">
                        <br>
                        <p>Copyright &copy; 2020. All right reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>