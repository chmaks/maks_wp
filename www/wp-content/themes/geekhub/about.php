<?php
/*
Template Name: tag-about
*/
?>
<?php get_header() ?>
        <div class="content"id="about">
					
                  <?php
					    if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <div>
                                <h2><?php the_title() ?></h2>
                                <p><?php the_content() ?></p>
                            </div>
					<?php //edit_post_link('Редактировать'); ?>
					<?php endwhile;?>
                    <?php else :
					 echo "Sorry, no posts were found";
					 endif;
				?>
           
		
		</div>

<?php get_footer() ?>