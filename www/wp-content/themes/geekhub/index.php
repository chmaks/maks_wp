<?php get_header(main) ?>
        <div class="content">
            
                <p class="aboutgeekhub"><strong>GeekHub</strong> — це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. Якщо ти зацікавлений — запрошуємо ознайомитись з<a href="about.html"> деталями проекту.</a> </p>
                <h2>Наші Курси</h2>
				<ul class="courses" id="courses-<?php the_ID(); ?>">
					<?php
					    if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <li>
                                <h3><?php the_title() ?></h3>
                                <p><?php the_content() ?></p>
                            </li>
						
					<?php // edit_post_link('Редактировать'); ?>
					<?php endwhile;?>
                    <?php else :
					 echo "Sorry, no posts were found";
					 endif;
				?>
           
			<ul class="social-block">
				<li class="vk-block" id="vk" style="height: 240px; width: 276px; background: none repeat scroll 0% 0% transparent;">
						<div id="vk_groups"></div>
						<script type="text/javascript">
						VK.Widgets.Group("vk_groups", {mode: 0, width: "276", height: "240"}, 30111409);
						</script>
				</li>
				<li class="certificates"><h4><a href="#">certificates regestry</a></h4></li>
				<li class="sponsors">
					<h4>Наші спонсори</h4>
					<ul>
						<li class="hog"><a href="#" ></a></li>
						<li class="moc"><a href="#"></a></li>
						<li class="sergium"><a href="#"></a></li>
						<li class="youth"><a href="#" ></a></li>
						<li class="svai"><a href="#" ></a></li>
					</ul>
				</li>
			</ul>
		</div>

<?php get_footer() ?>