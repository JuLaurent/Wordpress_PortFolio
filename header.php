<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html class="no-js" lang="fr">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class="browsehappy">Vous utilisez un navigateur internet <strong>dépassé</strong>. SVP, <a href="http://browsehappy.com/">mettez votre navigateur à jour</a> pour améliorer votre expérience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <header class="head">
            <div>
                <h1><a href="http://www.Julien-Laurent.com/">Julien Laurent</a></h1>
                <?php 

                    $defaults = array(
                        'theme_location'  => 'top',
                        'container'       => 'nav',
                        'container_class' => 'nav',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    );

                wp_nav_menu( $defaults );

                 ?>

                <?php $reseaux = get_posts(array(
                    'post_type'     => 'reseaux',
                    'posts_per_page'    => 6,
                  )); ?>

                <ul class="social">
                    <?php if ($reseaux): ?>
                        <?php foreach ($reseaux as $post): ?>  
                            <?php if ( $post->post_title !== 'mail' ): ?>
                                <li><a href="<?php the_field('lien'); ?>" class="<?php the_field("classe"); ?>"></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                </ul>
            </div>
        </header>
        <div class="wrapper">