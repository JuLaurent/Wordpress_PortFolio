<?php 
/*
Template Name: Compétences
*/
?>

<?php get_header(); ?>

<section class="comp" itemscope itemtype="http://schema.org/Language" >
    <div>
            
            <?php  

            $the_query = new WP_Query('pagename=skills');

            if ($the_query->have_posts()):
                
                while($the_query->have_posts()) : $the_query->the_post();  

            ?>
            
            <h2><?php the_title(); ?></h2>
            
            <?php

                endwhile;
            endif;
            wp_reset_postdata();

        ?>

            <?php $skills = get_posts(array(
                'post_type'     => 'skills',
                'posts_per_page'    => -1,
              )); ?>
            <ul>
                <?php if ($skills): ?>
                    <?php foreach ($skills as $post): ?>   
                       <li>
                            <?php echo get_the_post_thumbnail( $post_id, 900, 'thumbnail' ); ?> 
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
    </div>
</section>

<?php get_footer(); ?>