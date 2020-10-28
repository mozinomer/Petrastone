<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INdex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- addding the cdn's -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="logoContainer">
            <a href="<?php echo site_url(); ?>">
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <img src="<?php echo $image[0]; ?>">
            </a>
        </div>
        <div class="containerrighticons">
            <ul>
                <li class="searchItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/1.png">
                </li>
                <li class="searchItem">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2.png">
                </li>
                <li class="hamburgercontainer">
                    <div class="hamBUrgers">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="menuContaienrmain">
    <div class="innercontaienrASD">
        <div class="blacked" id="closeMenu"></div>
        <i class="fa fa-close" id="closeMenu1"></i>
        <div class="rightMenunContainer">
            <div class="logocontainerMenu">
                <a href="<?php echo site_url(); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <img src="<?php echo $image[0]; ?>">
                </a>
            </div>
            <div class="menuCOntainermainrightside">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
            <div class="socialmediaContainermenu">
                <ul>
                    <li><a href="<?php the_field('facebook', 'option'); ?>">facebook</a></li> |
                    <li><a href="<?php the_field('twitter', 'option'); ?>">twitter</a></li> |
                    <li><a href="<?php the_field('instagram', 'option'); ?>">instagram</a></li> |
                    <li><a href="<?php the_field('linkedin', 'option'); ?>">Pinterest</a></li>
                </ul>
            </div>
            <div class="galleryMenuContianer">
                <h2>Gallery</h2>
                <div class="row">
                    <?php $data_query =  new WP_Query(array('post_type' => 'gallery', 'posts_per_page' => 4)); while ( $data_query->have_posts() ) : $data_query->the_post();?>
                        <div class="col">
                            <div class="imagecontainerGalleryMenu">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php if (! is_front_page()) { ?>
    <div class="bannerPages" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
        <div class="container">
            <div class="contentInnerBanner">
                <h2><?php the_title(); ?></h2>
                <p>
                    <a href="<?php echo site_url(); ?>">Home</a> > <span><?php the_title(); ?></span>
                </p>
            </div>
        </div>
    </div>
<?php } ?>