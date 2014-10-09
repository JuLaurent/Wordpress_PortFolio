<?php 
/*
Template Name: A Propos
*/
?>

<?php get_header(); ?>

        <section class="a_propos">
            <div>
            <?php  

                $the_query = new WP_Query('pagename=a-propos');

                if ($the_query->have_posts()):
                    
                    while($the_query->have_posts()) : $the_query->the_post();  

                ?>
                
                <h2><?php the_title(); ?></h2>
                
                <?php

                    endwhile;
                endif;
                wp_reset_postdata();

            ?>

            <?php $info_perso = get_posts(array(
                        'post_type'     => 'info_perso',
                      )); ?>

                <?php if ($info_perso): ?>
                    <?php foreach ($info_perso as $post): ?>   
                       <img src="<?php the_field('photo') ?>" alt="une photo de moi">
                       <?php the_field('longue_description') ?>
                       <a href="<?php the_field('cv') ?>">Mon CV</a>
                    <?php endforeach; ?>
                <?php endif; ?> 
            </div>
        </section>

<?php get_footer(); ?>