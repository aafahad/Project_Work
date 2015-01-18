<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
<?php include_once('header.php')?>
<div class="main">
    <div class="container">
        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-8">
                <ul class="nav nav-tabs">
                    <li role="presentation" ><a href="home.html">Home</a></li>
                    <li role="presentation"><a href="about_me.php">About Me</a></li>
                    <li role="presentation"><a href="photo_gallery.php">Gallery</a></li>
                    <li role="presentation"><a href="registration.php">Registration</a></li>
                    <li role="presentation" class="active"><a href="contact_me.php">Contact Me</a></li>
                    <li role="presentation"><a href="login.php">LOgin</a></li>
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

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Home </a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Mission</a></li>

                </ul>
<br><br>

                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>

            </div>
            <div class="col-md-8">
                <h3><i class="text-primary">Contact</i></h3>
                <br>
                    <p class="text-danger">
                        You may contact us at any time,any moment.
                    </p>

                <br>
                <h3><i class="text-primary">Send Us An Email:</i></h3>

                <br>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Nmae(*)</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control"  placeholder="Your Name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Email(*)</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control"  placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Website</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" placeholder="Website(If Any)">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Your Message</label>
                        <div class="col-sm-7">
                           <textarea rows="5" cols="63" ></textarea>
                        </div>
                    </div>


                    <div class="form-group">

                        <label for="exampleInputFile">&nbsp;&nbsp;&nbsp;&nbsp;File input</label>


                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="file" id="exampleInputFile">

                    </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
                </form>

                <center class="text-danger">(*) Fields are required.</center>

            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
    <!---Write Your Content Here----------->

</div>
<?php include_once('footer.php')?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>