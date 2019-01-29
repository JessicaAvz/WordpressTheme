<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <?php wp_head(); ?>
    <style>
    .showcase {
        background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg');
        ?>) no-repeat center center;
    }
    </style>
</head>

<body>
    <div class="tms-sticky-button">
        <a class="tms-ask-question" href="#">
            Ask a question
        </a>
    </div>

    <div class="tms-blog-masthead">
        <div class="container-fluid tms-top-bar-container">
            <div class="row no-gutters align-items-center">
                <div class="col-sm-12 col-md-3 col-lg-3" align="center">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9" align="right">
                    <a href="#">
                        Add Listing
                    </a>
                    <a href="#">
                        Real Life Recovery Stories
                    </a>
                    <a href="#">
                        Your Account
                    </a>
                </div>
            </div>
        </div>
        <div class="container tms-logo-container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4" align="center">
                    <a href="#">
                        <img src="http://34.220.200.232/wp-content/uploads/2019/01/find-rehab-centers-logo.jpg"
                            alt="Logo">
                    </a>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8" align="right">
                    <div>We want to help you.</div>
                    <div>TOLL FREE ASSESMENT.</div>
                    <div>
                        <a href="#" class="phone-number">
                            888-888-888
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse nav justify-content-center',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
            </div>
        </nav>
    </div>

    <section class="showcase">

    </section>

    <section class="boxes">
        <div class="card">
            hola hola
        </div>

        <div class="card">
            hola hola
        </div>

        <div class="card">
            hola hola
        </div>

        <div class="card">
            hola hola
        </div>
        <div class="card">
            hola hola
        </div>
    </section>

    <?php get_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>

</html>