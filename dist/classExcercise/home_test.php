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
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Quick Links</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Link 1</li>
                        <li class="list-group-item">Link 2</li>
                        <li class="list-group-item">Link 3</li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Upcoming Events</div>
                <div class="panel-body">

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="row">
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
                            <img src="snow.jpg" alt="..." height="3px" width="100%">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="snow.jpg" alt="..." height="3px" width="100%">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>

                        <div class="item">
                            <img src="snow.jpg" alt="..." height="3px" width="100%">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>

                        ...
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
            <div class="row">

                <div class="col-md-3">
                    <div class="panel panel-default">
                    <div class="panel-body">
                    <p class="text-muted">Some text</p>
                    <p class="text-primary">Some text</p>
                    <p class="text-success">Some text</p>
                    <p class="text-info">Some text</p>
                    <p class="text-warning">Some text</p>
                    <p class="text-danger">Some text</p>
                    <button type="button" class="btn btn-default">See Text</button>
                        </div>
                </div>
                    </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                    <div class="panel-body">
                    <p class="text-muted">Some text</p>
                    <p class="text-primary">Some text</p>
                    <p class="text-success">Some text</p>
                    <p class="text-info">Some text</p>
                    <p class="text-warning">Some text</p>
                    <p class="text-danger">Some text</p>
                    <button type="button" class="btn btn-default">See More</button>
                </div>
                        </div>
                    </div>
                <div class="col-md-3">
                    <div class="panel panel-success">
                    <div class="panel-body">
                    <p class="text-muted">Some text</p>
                    <p class="text-primary">Some text</p>
                    <p class="text-success">Some text</p>
                    <p class="text-info">Some text</p>
                    <p class="text-warning">Some text</p>
                    <p class="text-danger">Some text</p>
                    <button type="button" class="btn btn-default">See More</button>
                </div>
                        </div>
                    </div>


            </div>

        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Quick Links</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Link 1</li>
                        <li class="list-group-item">Link 2</li>
                        <li class="list-group-item">Link 3</li>
                    </ul>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Useful Links</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Link 1</li>
                        <li class="list-group-item">Link 2</li>
                        <li class="list-group-item">Link 3</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <hr>
</div>

<?php include_once ('footer.php')?>
</body>
</html>