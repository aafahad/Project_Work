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
        <ol class="breadcrumb">
            <li><a href="photogallery.php">Photogallery</a></li>
            <li><a href="videos.php">Videos</a></li>

        </ol>

    </div>
    <div class="col-md-2"></div>
</div>
<div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img data-src="images/DSC00965.JPG" alt="No view">
                    <div class="caption">
                        <h3>A Flower</h3>
                        <p>A Lovely Flower</p>
                        <p><a href="#" class="btn btn-primary" role="button">Normal View</a> <a href="#" class="btn btn-default" role="button">Full View</a></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="col-md-2"></div>
</div>





<?php include_once('footer.php') ?>
</body>
</html>