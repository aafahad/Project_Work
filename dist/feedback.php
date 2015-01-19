<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
<?php include_once('header.php') ?>

<div class="container">


    <div class="row">

        <div class="col-md-3">

        </div>

        <div class="col-md-8">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="home.php">Home</a></li>
                <li role="presentation"><a href="about_me.php">About Me</a></li>
                <li role="presentation"><a href="gallery.php">Gallery</a></li>
                <li role="presentation"><a href="portfolio.php">Portfolio</a></li>
                <li role="presentation"><a href="contact_me.php">Contact Me</a></li>
                <li role="presentation"><a href="registration.php">Registration</a></li>
                <li role="presentation"><a href="feedback.php">Feedback</a></li>
            </ul>
        </div>

        <div class="col-md-1"
        <form class="navbar-form navbar-right" role="search">
            <span class="glyphicon glyphicon-search"></span>
        </form>
    </div>
</div>



<div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-8">


        <ul class="nav nav-pills">
            <li><a href="#">Notifications <span class="badge">23</span></a></li>
            <li><a href="#">Messages <span class="badge">3</span></a></li>
        </ul>
        <br>
        <ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
            <li class="active">
                <a href="#">
                    <span class="badge pull-right">23</span>
                    Notifications
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="badge pull-right">3</span>
                    Messages
                </a>
            </li>
        </ul>
        <br>

        <div class="jumbotron">
            <h1>New Message</h1>
            <p>Hi, How are you</p>
            <p><a class="btn btn-primary btn-lg" role="button">Read Message</a></p>
        </div>



    </div>

</div>

<?php include_once('footer.php') ?>
</body>
</html>