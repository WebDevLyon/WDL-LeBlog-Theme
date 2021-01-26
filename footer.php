	<footer class='footer'>
		<!-- <?php wp_nav_menu(array(
					'theme_location' => 'footer',
					'container' => 'ul', // afin d'éviter d'avoir une div autour 
					'menu_class' => 'header__bottom__nav__menu',
				)); ?>-->
				<div class='footer__body row' >
				<div class='footer__body__column col-12 col-md-3 flex-grow-1'><?php 
					dynamic_sidebar('blog-footer-column1');
					 ?></div>
				<div class='footer__body__column col-12 col-md-3 flex-grow-1'><?php 
					dynamic_sidebar('blog-footer-column2');
					 ?></div>
				<div class='footer__body__column col-12 col-md-3 flex-grow-1'><?php 
					dynamic_sidebar('blog-footer-column3');
					 ?></div>
				<div class='footer__body__column col-12 col-md-3 flex-grow-1'><?php 
					dynamic_sidebar('blog-footer-column4'); 
					 ?></div>
				</div>
		<div class='footer__bottom text-muted d-flex text-center'>
			<p class='m-auto'>Made with <i class="far fa-heart text-warning"></i> by <a href="http://webdevlyon.fr/" class='text-decoration-none text-muted'> Web Dev Lyon</a> | Copyright ©2020</p>

		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>