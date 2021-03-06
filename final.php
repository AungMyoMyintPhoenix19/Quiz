<?php
session_start();

$score = $_SESSION['score'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Quiz </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>

    </style>
</head>

<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><h2 class="title"> QUIZZ </h2> </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="Active">
                    <a href="index.php"> Home </a>
                </li>
                <li>
                    <a href="question.php"> Start </a>
                </li>
                <li>
                    <a href="admin.php"> Admin </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <div class="row">
            <h2 class="index-title">
                Congratualion!
            </h2>
        </div>
        <div class="row center">
            <p>
                You have completed the test.
            </p>
        </div>
        <div class="row ">
            <div class="col-md-4"></div>
            <div class="col-md-4 index-border">
                <ul>

                    <li>
                        <lable> <strong> Total Score  </strong></lable> : <?php echo $score; $_SESSION['score']=0; ?>
                    </li>

                </ul>

            </div>
            <div class="col-md-4"></div>

        </div>
        <div class="row ">
            <div class="col-md-4"></div>
            <div class="col-md-4 center">
                <a class="submit-button text-center" href="question.php"> Test Again </a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</main>

<footer>
    <div class="container">

    </div>
</footer>
</body>
</html>
