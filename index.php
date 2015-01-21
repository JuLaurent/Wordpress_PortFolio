<?php get_header(); ?>
        
        <section class="propos">
            <div>
                <?php $info_perso = get_posts(array(
                        'post_type'     => 'info_perso',
                      )); ?>

                <?php if ($info_perso): ?>
                    <?php foreach ($info_perso as $post): ?>   
                       <img src="<?php the_field('photo') ?>" alt="une photo de moi">
                       <blockquote><?php the_field('courte_description') ?></blockquote>
                       <a href="page_a_propos.html" title="aller sur la page A propos">en savoir plus sur moi</a>
                    <?php endforeach; ?>
                <?php endif; ?>  
            </div>
        </section>
        <section class="realisations">
            <div itemscope itemtype="http://schema.org/WebSite">
                
                <h2>J'ai réalisé dernièrement...</h2>
                
                <?php $realisations = get_posts(array(
                        'post_type'     => 'realisations',
                        'posts_per_page'    => 3,
                      )); ?>
                <ul>
                    <?php if ($realisations): ?>
                        <?php foreach ($realisations as $post): ?>   
                           <li><a href="<?php the_permalink(); ?>" title="en savoir plus sur <?php the_field('nom') ?>"><?php echo get_the_post_thumbnail( $post_id, 900, 'thumbnail' ); ?><span itemprop="name"><?php the_field('nom') ?></span></a></li> 
                        <?php endforeach; ?>
                    <?php endif; ?>  
                </ul>
                <a href="realisations" title="aller sur la page Réalisations">découvrir toutes mes réalisations</a>
            </div>
        </section>
        <section class="skills" itemscope itemtype="http://schema.org/Language" >
            <div>
                <h2>Je sais désormais utiliser...</h2>
                <?php $skills = get_posts(array(
                    'post_type'     => 'skills',
                    'posts_per_page'    => 3,
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
            <a href="skills" title="aller sur la page Compétences">en savoir plus sur mes compétences</a>
            </div>
        </section>
        <section class="contact">
            <div>
                <h2>Comment me contacter ?</h2>
                <?php $reseaux = get_posts(array(
                    'post_type'     => 'reseaux',
                    'posts_per_page'    => 6,
                  )); ?>
                
                <ul class="social">
                    <?php if ($reseaux): ?>
                        <?php foreach ($reseaux as $post): ?>  
                            <li><a href="<?php the_field('lien'); ?>" title="Me contacter via <?php the_field('nom') ?>" ><?php echo get_the_post_thumbnail( $post_id, 300, 'thumbnail' ); ?><span><?php the_field('nom'); ?></span></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                </ul>
                <a href="contact" title="aller sur la page Contact">voir mes coordonnées</a>
            </div>
            
            
        </section>

<?php get_footer(); ?>