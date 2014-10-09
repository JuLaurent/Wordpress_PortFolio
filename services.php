<?php 
/*
Template Name: Services
*/
?>

<?php get_header(); ?>

<section class="serv" itemscope itemtype="http://schema.org/Language" >
    <div>
            
            <?php  

            $the_query = new WP_Query('pagename=services');

            if ($the_query->have_posts()):
                
                while($the_query->have_posts()) : $the_query->the_post();  

            ?>
            
            <h2><?php the_title(); ?></h2>
            
            <?php

                endwhile;
            endif;
            wp_reset_postdata();

        ?>

            <?php $services = get_posts(array(
                'post_type'     => 'services',
                'posts_per_page'    => 3,
              )); ?>
            <ul>
                <?php if ($services): ?>
                    <?php foreach ($services as $post): ?>   
                       <li>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptate rerum, atque delectus quos! Libero nemo impedit eos architecto nisi et molestias eligendi recusandae adipisci aliquam temporibus fugit consequuntur, ea.</p>
                            <img itemprop="image" src="<?php the_field('image'); ?>" alt="en apprendre plus sur <?php the_field('nom') ?>">
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
    </div>
</section>

<?php get_footer(); ?>