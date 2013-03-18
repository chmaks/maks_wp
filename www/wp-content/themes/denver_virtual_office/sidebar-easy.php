
<div class="sidebar">
		<ul class="sidecontacts">
			<li class="phoneus">
				
					<h4>Denver Virtual Offices</h4>
					<span>303.501.1801</span>
				
			</li >
			<li class="skypeus">
				
					<h4>Skype</h4>
					<span>denver.vo</span>
				
			</li>
			<li class="mailus">
				
					<h4>E-mail:</h4>
					<a href="#">info@denvervirtualoffices.com</a>
				
			</li>
			<li class="trackus">
				
					<h4></h4>
					<span></span>
				
			</li>
		</ul>
	</div>


	<?php
if (function_exists('register_sidebars'))
register_sidebars(2, array(
'before_widget' => '<div>',
'before_title' => '',
'after_title' => '',
'after_widget' => '</div>'
));
?>