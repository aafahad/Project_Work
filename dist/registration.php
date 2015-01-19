<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <center><i>Tangina Tushar</i></center>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3"><img src="flower.jpg" height="50px" width="150px"></div>
        <div class="col-md-3"><i>My Personal Website........</i>

            <br>
            &nbsp; &nbsp;  &nbsp;  &nbsp; <b>Always Dedicated to Service............</b>
        </div>
        <div class="col-md-3"></div>

    </div>


    <hr>
</header>


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

        <div class="col-md-1">
            <form class="navbar-form navbar-right" role="search">
                <span class="glyphicon glyphicon-search"></span>
            </form>
        </div>
    </div>



    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">


            <form role="form" action="add.php">
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="text" name="fullName" placeholder=" ">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="radio-group">
                    <label for="radio">Gender</label>
                    <label class="radio-inline"><input type="radio" name="gender">Male</label>
                    <label class="radio-inline"><input type="radio" name="gender">Female</label>

                </div>

                <div class="checkbox-group">
                    <label for="checkbox">Hobbies</label>
                    <label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="">Photography</label>
                    <label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="">Travelling</label>
                    <label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="">Others</label>
                </div>

                    <div class="form-group">
                        <label for="sel1">Cities</label>
                        <select class="form-control" id="sel1" name="cities[]" multiple="multiple">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Khulna">Pabna</option>
                            <option value="Jshore">Jesshore</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Borishal">Borishal</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Faridpur">Faridpur</option>
                            <option value="Narayangonj">Narayangonj</option>
                            <option value="Rangamati">Rangamati</option>
                            <option value="Kagrachori">Kagrachori</option>
                            <option value="Jorachori">Jorachori</option>
                            <option value="Noakhali">Noakhali</option>
                            <option value="Bbaria">Bbaria</option>

                        </select>
                    </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>



                <div class="checkbox">
                    <label>
                        <input type="checkbox">Please Allow me
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>


        </div>
        <div class="col-md-2">




        </div>

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary" >

                        <div class="panel-heading">
                            <center><i>CopyRight &copy; Tangina Tushar</i></center>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary" >

                        <div class="panel-heading">
                            <center><i>Services|| Information</i></center>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>