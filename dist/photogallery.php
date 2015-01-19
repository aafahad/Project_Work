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
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/Picture%20440.jpg" alt="..." height="5px" width="100%">
                    <div class="carousel-caption">
                        Tushar
                    </div>
                </div>
                <div class="item">
                    <img src="images/DSC00965.JPG" alt="..." height="5px" width="100%">
                    <div class="carousel-caption">
                        Flower
                    </div>
                </div>

                <div class="item">
                    <img src="images/Picture%20439.jpg" alt="..." height="5px" width="100%">
                    <div class="carousel-caption">
                        Tangina
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>




    </div>
    <div class="col-md-2"></div>
</div>



<?php include_once('footer.php') ?>

</body>
</html>