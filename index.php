<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nairobistudents</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
</head>

<body>
    <!--navigation bar------->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="nav-brand" href="#"><img src="images/logo2.PNG" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" active>
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.html">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sell.php">Sell</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary" onclick="cart.js">Cart</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary" onclick="cart.js">My Account</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--connect------->
    <div class="container-fluid padding">
        <div class="row text-center padding">

            <div class="col-12">
                <hr class="dark">
                <h2>Interact </h2>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>

        </div>
    </div>
    <!--footer------->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="images/logo2.PNG" />
                    <hr class="light">
                    <p>P.O Box 75488 00200</p>
                    <p>Nairobi-Kenya</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>We stand For:</h5>
                    <hr class="light">

                    <p>Quality</p>
                    <p>Productivity</p>
                    <p>Usefulness</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Working hours:</h5>
                    <hr class="light">

                    <p>weekdays: 8am-10pm</p>
                    <p>weekends: 10am-3pm</p>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h5>&copy; Nairobistudents.com</h5>
                </div>
            </div>
    </footer>
</body>

</html>