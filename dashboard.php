<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>About Me</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<?php include_once('header.php')?>
<!-------->


<div class="container">
    <div class="row">

        <div class="col-md-3">

        </div>

        <div class="col-md-8" id="top">
            <ul class="nav nav-tabs">
                <li role="presentation" ><a href="home.html">Home</a></li>
                <li role="presentation" ><a href="about_me.php">About Me</a></li>
                <li role="presentation"><a href="photo_gallery.php">Gallery</a></li>
                <li role="presentation"><a href="registration.php">Registration</a></li>
                <li role="presentation"><a href="contact_me.php">Contact Me</a></li>
                <li role="presentation"><a href="login.php">Login</a></li>
                <li role="presentation"><a href="portfolio.php">Portfolio</a></li>


            </ul>
        </div>

        <div class="col-md-1">

        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h3><i>Dolon</i></h3><span class="glyphicon glyphicon-list"></span>


            <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Dashboard &nbsp;<span class="glyphicon glyphicon-stats"></span> </a></li>
                <li><a href="#">User &nbsp;<span class="glyphicon glyphicon-user"></span> &nbsp;<span class="badge">119</span></a></li>
                <li><a href="#">Blog &nbsp;<span class="glyphicon glyphicon-sound-6-1"></span></a></li>
                <li><a href="#">Mailbox &nbsp;<span class="glyphicon glyphicon-envelope"></span> &nbsp;<span class="badge">14</span></a></li>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                        Manage &nbsp;<span class="glyphicon glyphicon-wrench"></span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">View</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>

                    </ul>
                </div>

            </ul>

        </div>
        <div class="col-md-9">
            <img src="image/dolon.jpg" height="50px" width="50px " class="img-circle">&nbsp; &nbsp; &nbsp; &nbsp;
            <a href="#"><span class="glyphicon glyphicon-envelope"></span> &nbsp;<span class="badge">25</span></a> &nbsp;&nbsp;
            <a href="#"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;<span class="badge">60</span></a> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <a href="#"><span class="glyphicon glyphicon-share"></span>&nbsp;Log Out</a>
<hr>
            <h1 class="text-danger"><i>Welcome To Dashboard.....</i></h1>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur quam augue, vehicula quis, tincidu
                nt vel, varius vitae, nulla. Sed convallis orci. Duis libero orci, pretium a, convallis quis, pellentesque a, d
                olor. Curabitur vitae nisi non dolor vestibulum consequat.

            </p>

        </div>

    </div>

</div>

<br><br><br><br>

<?php include_once('footer.php')?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>