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

        <div class="col-md-1">
            <form class="navbar-form navbar-right" role="search">
                <span class="glyphicon glyphicon-search"></span>
            </form>
        </div>
    </div>



    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">


            <nav id="navbar-example2" class="navbar navbar-default navbar-static" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#Personal">Personal</a>
                    </div>
                    <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#Education">Education courses</a></li>
                            <li><a href="#Experience">Educational Experience</a></li>
                            <li><a href="#Extracurricular">Extracurricular Activities</a></li>
                            <li class="dropdown">
                                <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown">Hobbies <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="navbarDrop1">
                                    <li><a href="#Photography" tabindex="-1">Photography</a></li>
                                    <li><a href="#Travelling" tabindex="-1">Travelling</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#Gardening" tabindex="-1">Gardening</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
                <h4 id="Personal">Personal Information</h4>
                <p>Tangina Shultana
                    Sayanir
                    Holding no-3253/C-5,
                    Bonorupa Residential Area
                    Shoraipara, Pahartoli, Chittagong.
                    Cell: 01723440545.
                    E-Mail: tanjina_tushar@yahoo.com   </p>
                <h4 id="Education">Education courses</h4>
                <ul class="list-group">
                    <li class="list-group-item"> Rocks and Minerals</li>
                    <li class="list-group-item">Thermodynamics & Phase Behavior</li>
                    <li class="list-group-item"> Fluid Mechanics</li>
                    <li class="list-group-item"> Sedimentary Rocks & Stratigraphy</li>
                    <li class="list-group-item">Heat Transfer</li>
                    <li class="list-group-item">Rocks & Fluid  Properties</li>
                    <li class="list-group-item">Reservoir Engineering-1,2</li>
                    <li class="list-group-item">Petroleum Geology</li>
                    <li class="list-group-item"> Drilling & Well Completion</li>
                    <li class="list-group-item">Geo resources Exploration  Methods</li>
                    <li class="list-group-item">Well Logging & Formation Evaluation</li>
                    <li class="list-group-item">Engineering statistics</li>
                    <li class="list-group-item">Petroleum Production Engineering</li>
                    <li class="list-group-item">Transmission & Distribution of  NG</li>
                    <li class="list-group-item">Hazards & Risks in PGE</li>
                    <li class="list-group-item">Natural Gas Engineering</li>
                    <li class="list-group-item">Well Test Analysis</li>
                    <li class="list-group-item">Control Engineering</li>
                    <li class="list-group-item"> Open Pit & Placer Mining</li>
                    <li class="list-group-item">Mining Engineering</li>
                    <li class="list-group-item">Advance Mining Engineering</li>
                    <li class="list-group-item">Mine Dewatering & Safety</li>
                    <li class="list-group-item">Material Science & Corrosion</li>
                    <li class="list-group-item">Hydrology & Groundwater Resource</li>
                    <li class="list-group-item">Introduction to Earth System Science</li>
                    <li class="list-group-item">Geology & Geo resources of Bangladesh</li>
                </ul>
                <h4 id="Experience">Educational Experience</h4>
                <ul> <li>Industrial tours in Habiganj gas field and Kailastilla gas field in Sylhet.</li>
                    <li> Geological field work in Jaintapur, Jaflong, Sitakunda and Saint Martin Island.</li>
                    <li>Design of American Standard Testing Method (ASTM-86) Distillation Equipment.</li>
                    <li>Flow measurement by Orifice meter.</li>

                </ul>
                <h4 id="Extracurricular">Extracurricular Activities</h4>
                <p> Ex-Assistant Treasurer and general member of KIN, a voluntary organization.</p>
                <h4 id="Photography">Photography</h4>
                <img src="flower.jpg" height="100px" width="150px">
                <h4 id="Travelling">Travelling</h4>
                <p>

                    Longest natural beach in the world, archaeological sites, historical mosques and monuments picturesque landscape, chaotic cities, forest walks, rolling tea gardens, rich flora & fauna , enchanting colorful tribal life, river journeys, innocent rural life, distinctly different topography, flavors of food, color and festivity are all part of this exploration of Bangladesh.

</p>
                <h4 id="Gardening">Gardening</h4>

               <p> Longest natural beach in the world, archaeological sites, historical mosques and monuments picturesque landscape, chaotic cities, forest walks, rolling tea gardens, rich flora & fauna , enchanting colorful tribal life, river journeys, innocent rural life, distinctly different topography, flavors of food, color and festivity are all part of this exploration of Bangladesh.
</p>

            </div>


        </div>

    </div>

    <?php include_once('footer.php') ?>
</body>
</html>