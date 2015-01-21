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
                    'posts_per_page'    => -1,
                  )); ?>
            <ul>
                <?php if ($realisations): ?>
                    <?php foreach ($realisations as $post): ?>   
                        <li>
                            <div class="desc">
                                <h3><?php the_field('nom') ?></h3>
                                <?php the_field('short_description') ?>
                            </div><!--
                            --><div class="links">
                                <a class="link" href="<?php the_permalink(); ?>" title="en savoir plus sur <?php the_field('nom') ?>">en savoir plus<span> sur <?php the_field('nom') ?></span></a>
                                <?php if ( get_field('lien') != "" ): ?>
                                    <a class="link" href="<?php the_field('lien'); ?>" title="aller sur le site <?php the_field('nom') ?>">aller sur le site<span> <?php the_field('nom') ?></span></a>
                                <?php endif; ?>
                            </div><!--
                            --><a class="img" href="<?php the_field('lien'); ?>" title="en savoir plus sur <?php the_field('nom') ?>">
                                <?php echo get_the_post_thumbnail( $post_id, 900, 'thumbnail' ); ?> 
                                <span itemprop="name"><?php the_field('nom') ?></span>
                            </a>

                        </li> 
                    <?php endforeach; ?>
                <?php endif; ?>  
            </ul>
        </div>
    </section>  

<?php get_footer(); ?>