<?php
/*
Template Name: tag-team
*/
?>
<?php get_header(‘main’) ?>
        <div class="content">
            <h2>Команда GeekHub</h2>
			<ul id="team" class="team"> 
              		<?php
					    if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <div><div class="info">
							<h3><?php the_title() ?></h3><span><?php the_content() ?></span></div> 
                                                         
								<p><?php the_content() ?></p>
                            </div>
					<?php edit_post_link('Редактировать'); ?><br />
					<?php endwhile;?>
                    <?php else :
					 echo "Sorry, no posts were found";
					 endif;
				?>
           
		
		</div>

<?php get_footer() ?>