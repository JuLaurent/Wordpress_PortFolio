<?php get_header(); ?>

    <section class="single-real">
        <div itemscope itemtype="http://schema.org/WebSite">
            
            <?php  

                $the_query = new WP_Query('pagename=realisations');

                wp_reset_postdata();

            ?>
            
            <?php $realisations = get_posts(array(
                    'post_type'     => 'realisations',
                    'posts_per_page'    => 1,
                  )); ?>
            
		    <?php if ($realisations): ?> 
				<h2><?php the_field('nom') ?></h2>
	            <?php echo get_the_post_thumbnail( $post_id, 900, 'thumbnail' ); ?> 
	            <?php the_field( 'description' ) ?>
                <?php if ( get_field('lien') != "" ): ?>
                    <a class="link" href="<?php the_field('lien'); ?>" title="aller sur le site <?php the_field('nom') ?>">aller sur le site<span> <?php the_field('nom') ?></span></a>
                <?php endif; ?>
		    <?php endif; ?>  
	    </div>
    </section>  

<?php get_footer(); ?>