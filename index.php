<?php require 'var.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" media="screen, print" href="//fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C300italic%2Cregular%2Citalic&amp;subset=latin-ext%2Clatin" />
    <link type="text/css" rel="stylesheet" media="screen, print" href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" /><!-- end -->

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link
        rel="shortcut icon"
        href="//storage.googleapis.com/instapage-user-media/c450f410/12476527-0-favicon-1.ico"
        type="image/x-ico"
    />
    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-absolute-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="//storage.googleapis.com/instapage-user-media/c450f410/10645083-0-xteam-white.png" style="height: 100%;  margin-top: 0px;" alt="XTEAM Logo">
                </a>
            </div>

        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php echo $topTitle; ?></h1>
                <hr>
                <p><?php echo $topContent; ?></p>
                <?php /** <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a> **/ ?>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about" style="padding:70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2 class="section-heading"><?php echo $introduceTitle; ?></h2>
                    <p class="text-faded"><?php echo $introduceContent; ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="steps">
            <?php foreach ( $steps as $stepNo => $step ) { ?>
                <div class="container">
                    <div class="row no-gutter ">
                        <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                            <h2 class="step-title" id="step-<?php echo $stepNo+1; ?>">
                                <img src="img/<?php echo $stepNo+1; ?>.jpg" class="step-image" alt="">
                                <a href="#step-<?php echo $stepNo+1; ?>"><?php echo $step[ 'title' ]; ?></a>
                            </h2>
                            <hr class="full"/>
                            <?php foreach ( $step[ 'inside_steps' ] as $key => $inside_step ) { ?>
                                <h3><?php echo $inside_step[ 'title' ]; ?></h3>
                                <ul class="<?php echo $key; ?>">
                                    <?php foreach ( $inside_step[ 'elements' ] as $elementKey => $elementValue ) { ?>
                                        <li>
                                            <?php if ( is_numeric( $elementKey ) ) { ?>
                                                <?php echo $elementValue; ?>
                                            <?php } else { ?>
                                                <a href="<?php echo $elementValue; ?>"
                                                   target="_blank"><?php echo $elementKey; ?></a>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </section>

    <aside class="bg-smoke">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Watch other Paths</h2>
                <a href="http://paths.x-team.com/docker" class="btn btn-default btn-xl "  target="_blank">
                    <img src="img/docker.gif" />
                    DOCKER
                </a>
                <a href="https://github.com/szymonmichalak/react-forms-path" class="btn btn-default btn-xl" target="_blank">
                    <img src="//storage.googleapis.com/instapage-user-media/c450f410/9641413-0-react-logo-black.png" />
                    REACT.JS
                </a>
            </div>
        </div>
    </aside>

    <section id="contact" style="padding: 40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    2016 © All rights reserved. X-Company Pty Ltd.
                </div>
                <div class="col-lg-2 col-lg-offset-5 col-sm-12">
                    <a href="https://twitter.com/xteam" >
                        <img src="//storage.googleapis.com/instapage-user-media/c450f410/9763488-0-social3.png" alt="">
                    </a>

                    <a href="https://www.facebook.com/x.team/">
                        <img src="//storage.googleapis.com/instapage-user-media/c450f410/9763493-0-social1.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
