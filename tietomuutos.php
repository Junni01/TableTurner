<?php

include 'session.php'?>
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
            <p>Hei <p id="usernameHold">Username</p></p> <a href="etusivu.php"> Etusivu </a>
        </div>




        <div class="col-sm-9">


        <div>
            <label for="information">Tietosi:</label>
            <p id="information"> Etunimi:  <?php echo $_SESSION['lName'] ?> </p>
            <p>Sukunimi: <?php echo $_SESSION['lName']?> </p>
            <p>Sähköposti: <?php echo $_SESSION['login_user'] ?></p>

        </div>

        </div>
    </div>
</div>









</body>

<script>






</script>


</html>