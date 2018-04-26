<?php
include "session.php";

if(isset($_SESSION)) {
    header("url=etusivu.php");

}







?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Le Penier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <form class="form-signin" action="login.php" method="post">
                <h2 class="form-signin-heading">Sisäänkirjautuminen</h2>
                <label for="inputEmail" class="sr-only">Sähköposti</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Sähköposti" required autofocus>
                <label for="inputPassword" class="sr-only">Salasana</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Salasana" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Muista minut
                    </label>


                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">KirjauduT</button><br>
                <a href="register.html"> Luo tunnukset </a>
            </form>
        </div>


        <div class="col-sm-9">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="poyta.jpg" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="poyta2.jpeg" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="dog.jpg" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>








</body>
</html>
