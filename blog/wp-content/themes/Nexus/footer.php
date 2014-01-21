		<?php get_sidebar( 'footer' ); ?>

		<div id="footer-bottom">
		<?php
			$menu_class = 'bottom-nav';
			$footerNav = '';

			$footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menu_class, 'echo' => false, 'depth' => '1' ) );

			if ( '' === $footerNav )
				show_page_menu( $menu_class );
			else
				echo( $footerNav );
		?>
		</div> <!-- #footer-bottom -->
	</div> <!-- .page-wrap -->

	<div id="footer-info" class="container">
				<p id="copyright"> <span> Desenvolvido por </span> 
									<a href="http://www.acens.com.br" title="Desenvolvido por Acens">
									<img src="http://localhost/adm/blog/wp-content/themes/Foxy/images/Logo-Footer-Azul.png" alt="Acens Empresa Júnior"/></p>
	</div>

	<?php wp_footer(); ?>
</body>
</html>