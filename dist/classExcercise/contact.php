<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>


<?php include_once('header.php')?>
<body>
    <div class="container">
        <div class="row">
            <img class="media-object" src="snow.jpg" alt="..."height="100px" width="100%">
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact Message</h3>
                </div>
                <div class="panel-body">

                    <form role="form" action="add.php">
                        <div class="input-group">
                            <span class="input-group-user"></span>
                            <label for="name">Name</label>
                            <span class="glyphicon glyphicon-user"></span>
                            <input type="text" class="form-control" placeholder="name">

                        </div>

                        <div class="input-group">
                            <label for="email">Email address</label>
                            <span class="glyphicon glyphicon-envelope"></span>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>

                        <div class="input-group">
                            <label for="comment">Message</label>
                            <span class="glyphicon glyphicon-pencil"></span>
                            <textarea class="form-control" rows="5" id="comment" placeholder="Enter your message here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default"><a href="#">Send Message</a></button>

                        </form>
                </div>
            </div>




        </div>

        <div class="col-md-6">


            <h3>Address</h3>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Address1
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">

                            Kailashtilla gas field is one of the largest gas fields in Bangladesh with six wells. .


                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                             Address2
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Kailashtilla gas field is one of the largest gas fields in Bangladesh consists of six wells.
                        </div>
                    </div>
                </div>





            </div>
    </div>
        </div>

    <?php include_once ('footer.php')?>

</body>
</html>