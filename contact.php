<?php 
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

        <section class="contact1">
            <div>
            <?php  

                $the_query = new WP_Query('pagename=contact');

                if ($the_query->have_posts()):
                    
                    while($the_query->have_posts()) : $the_query->the_post();  

                ?>
                
                <h2><?php the_title(); ?></h2>
                
                <?php

                    endwhile;
                endif;
                wp_reset_postdata();

            ?>
                <div class="mail">
                    <h3>M'envoyer un mail</h3>
                    <form action="#" method="post">
                        <div>
                            <label for="from">votre adresse mail</label>
                            <input type="text" id="from" name="from"> <br>
                            <label for="subject">à propos de</label>
                            <input type="text" id="subject" name="subject"> <br>
                            <label for="message">votre message</label>
                            <textarea name="message" id="message" cols="30" rows="10">Ecrivez votre message ici</textarea>
                            <input type="submit" value="envoyer le mail">
                        </div>
                    </form>
                </div>
                <div class="coordonnees">
                    <h3>Mes coordonnées</h3>
                    <?php $info_perso = get_posts(array(
                        'post_type'     => 'info_perso',
                        'posts_per_page'    => 3,
                      )); ?>
                    <?php if ($info_perso): ?>
                        <?php foreach ($info_perso as $post): ?>   
                           <span><?php the_field('nom'); ?></span>
                           <span><?php the_field('adresse'); ?></span>
                           <span><?php the_field('ville'); ?></span>
                           <span class="mail">MAIL : <a href="mailto:Julienl.sama@gmail.com" title="M'envoyer un mail"><?php the_field('mail'); ?></a> </span>
                           <span class="gsm">GSM : <?php the_field('gsm'); ?></span>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                </div>
            </div>
        </section>
<?php

     $to      = 'Julienl.sama@gmail.com';
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>
<?php get_footer(); ?>