
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title><?= app()->view->getTitle(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= getUrl('bootstrap.min' , 'users')?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= getUrl('fontaswome' , 'users');?>">
    <link rel="stylesheet" href="<?= getUrl('template' , 'users')?>">
    <link rel="stylesheet" href="<?=  getUrl('owl' , 'users')?>">
    <link rel="stylesheet" href="<?=  getUrl('main' , 'users')?>">
    <!--

    TemplateMo 551 Stand Blog

    https://templatemo.com/tm-551-stand-blog

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><h2>Mohamed Hamed<em>.</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Class Cars</a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cars
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Used</a>
                            <a class="dropdown-item" href="#">New</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if(is_array(app()->view->getLayoutData()) && !empty(app()->view->getLayoutData())):
                            foreach (app()->view->getLayoutData() as $cat):
                            ?>
                            <a class="dropdown-item" href="#"><?= $cat['categoryName'] .' ('. $cat['type'] .')'?> </a>
                            <?php
                            endforeach;
                            endif;
                            ?>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Login|Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="main">
