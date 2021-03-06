<!DOCTYPE html>
<html lang="pt-PT">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?php echo get_bloginfo('name'); ?></title>

  <!-- Mobile Metas -->
  <meta name= "viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts  -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

  <!-- Libs and Plugins CSS -->
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/include/animations/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/include/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/css/style.css">
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/css/mobile.css">
  <link rel="stylesheet" href"<?php echo get_home_url(); ?>/wp-content/themes/website/include/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href"<?php echo get_home_url(); ?>/wp-content/themes/website/include/owl-carousel/css/owl.theme.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/css/theme.css">

</head>
  <body data-spy="scroll" data-target="#main-navbar">
  <div class="body">
    <?php get_header( 'home' );?>
  </div>

  <section id="about-section" class="page bg-style1">
            <!-- Begin page header-->
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h2>Sobre</h2>
                        <hr class="small">

                        <!-- <div class="devider"></div> -->
                    </div>
                </div>
            </div>
            <!-- End page header-->

            <!-- Begin rotate box-1 -->
            <div class="rotate-box-1-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Quem somos?</h4>
                                    <p>Um grupo de estudantes das mais variadas áreas com um interesse comum: astronomia</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                                <div class="rotate-box-info">
                                    <h4>O que fazemos?</h4>
                                    <p>Desenvolvemos projectos e organizamos eventos de divulgação de astronomia</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Porque fazemos?</h4>
                                    <p>Para aplicarmos os conhecimentos que os nossos cursos nos dão nesta área que nos interessa, e para transmitirmos o que sabemos e aprendemos a todos os curiosos pelo Cosmos</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Desde quando?</h4>
                                    <p>Nascemos enquanto Secção Cultural da Associação Académica de Coimbra a 9 de Maio de 1989</p>
                                </div>
                            </a>
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
            <!-- End rotate box-1 -->
            <div class="extra-space-l"></div>
  </section>

  <section id="projects-section" class = "page projects">
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>Projectos</h2>
                <hr class="small">
                <div class="extra-space-l"></div>
                <div class="row">
                              <!-- get id from category -->
                   <?php $category_id = get_cat_ID('projectos'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <?php if ( in_category($category_id) ) { ?>
                                  <div class="col-xs-12 col-sm-4">
                                      <div class="portfolio_single_content">
                                  <!-- html aqui -->
                                  <img src="<?php
                                  if (has_post_thumbnail()){
                                      $thumb_id = get_post_thumbnail_id( $post->ID );
                                      $image = wp_get_attachment_image_src( $thumb_id,'full' );
                                      echo $image[0];
                                  }
                                  ?>" alt="title"/>
                                  <div>
                                    <a href="#"><?php the_title(); ?></a>
                                    <span><?php the_content(); ?></span>
                                  </div>
                                </div>
                            </div>
                                  <?php } ?>
                                  <?php endwhile; else: ?>
                                     <p>Colocar projectos (categoria = projectos)</p>
                              <?php endif; ?>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

  </section>

  <section id="calendar-section" class="page bg-style1">
            <!-- Begin page header-->
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h2>Calendário</h2>
                        <hr class="small">
                        <div class="extra-space-l"></div>
            <?php
              $aux = 1;
              $events = eo_get_events(array(
                'numberposts'=>5,
                'event_start_after'=>'today',
                'showpastevents'=>true, //Will be deprecated, but set it to true to play it safe.
              )); ?>
            <?php
              if($events): ?>
            <?php
            foreach ($events as $event):
                if ($aux): ?>
                  <div class = "row">
                  <div class = "col-md-2"> </div>
                  <div class = "col-md-2 text-left" style = "border-left: 2px solid #ffd83b;"">
                  <?php
                  //Check if all day, set format accordingly
                  $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format'));
                  printf(
                    '<h3> %s </h3> <h3> %s </h3>', eo_get_the_start( 'M', $event->ID, $event->occurrence_id ), eo_get_the_start( 'd', $event->ID, $event->occurrence_id )
                  ); ?>
                  </div>
                  <div class = "col-md-6 text-left">
                  <h4> <?php echo get_post_field('post_title', $event->ID); ?> </h4>
                  <p><?php echo get_post_field('post_content', $event->ID); ?> </p>
                  </div>
                  <div class = "col-md-2"> </div>
                  </div>
                  <div class="extra-space-l"></div>
                  <?php $aux = 0; ?>
                <?php else: ?>
                  <div class = "row">
                  <div class = "col-md-2"> </div>
                  <div class = "col-md-6 text-right">
                  <h4> <?php echo get_post_field('post_title', $event->ID); ?> </h4>
                  <p><?php echo get_post_field('post_content', $event->ID); ?> </p>
                  </div>
                  <div class = "col-md-2 text-right" style = "border-right: 2px solid #0E1A2A;"">
                  <?php
                  //Check if all day, set format accordingly
                  $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format'));
                  printf(
                    '<h3> %s </h3> <h3> %s </h3>', eo_get_the_start( 'M', $event->ID, $event->occurrence_id ), eo_get_the_start( 'd', $event->ID, $event->occurrence_id )
                  ); ?>
                  </div>
                  <div class = "col-md-2"> </div>
                  </div>
                  <div class="extra-space-l"></div>
                  <?php $aux = 1; ?>
                <?php endif;?>
            <?php endforeach; ?>
            <?php endif;?>
                    </div>
                </div>
            </div>
            <!-- End page header-->
  </section>


  <?php get_footer(); ?>

  <!-- Plugins JS -->
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/stellar/js/jquery.stellar.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/animations/js/wow.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/waypoints.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/classie.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/jquery.easing.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/jquery.counterup.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/smoothscroll.js"></script>

  <!-- Theme JS -->
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/js/theme.js"></script>
</body>
