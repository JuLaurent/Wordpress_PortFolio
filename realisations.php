<?php 
/*
Template Name: Réalisations
*/
?>

<?php get_header(); ?>

    <section class="real">
        <div itemscope itemtype="http://schema.org/WebSite">
            
            <?php  

                $the_query = new WP_Query('pagename=realisations');

                if ($the_query->have_posts()):
                    
                    while($the_query->have_posts()) : $the_query->the_post();  

                ?>
                
                <h2><?php the_title(); ?></h2>
                
                <?php

                    endwhile;
                endif;
                wp_reset_postdata();

            ?>
            
            <?php $realisations = get_posts(array(
                    'post_type'     => 'realisations',
                    'posts_per_page'    => 3,
                  )); ?>
            <ul>
                <?php if ($realisations): ?>
                    <?php foreach ($realisations as $post): ?>   
                        <li>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptate rerum, atque delectus quos! Libero nemo impedit eos architecto nisi et molestias eligendi recusandae adipisci aliquam temporibus fugit consequuntur, ea.</p>
                            <a class="link" href="<?php the_field('lien'); ?>" title="en savoir plus sur <?php the_field('nom') ?>">en savoir plus<span> sur <?php the_field('nom') ?></span></a>
                            <a class="link" href="<?php the_field('lien'); ?>" title="aller sur le site <?php the_field('nom') ?>">aller sur le site<span> <?php the_field('nom') ?></span></a>
                            <a class="img" href="<?php the_field('lien'); ?>" title="en savoir plus sur <?php the_field('nom') ?>">
                                <img itemprop="image" src="<?php the_field('image'); ?>" alt="en apprendre plus sur <?php the_field('nom') ?>">
                                <span itemprop="name"><?php the_field('nom') ?></span>
                            </a>

                        </li> 
                    <?php endforeach; ?>
                <?php endif; ?>  
            </ul>
        </div>
    </section>  

<?php get_footer(); ?>