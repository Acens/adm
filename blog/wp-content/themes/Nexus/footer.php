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
	<div id="rodape">
		<div id="imagem-rodape">
			 	<a tittle="Desenvolvido por Acens" href="www.acens.com.br"> 
				<img alt="Acens Empresa Júnior" src="http://localhost/adm/blog/wp-content/themes/Foxy/images/Logo-Footer-Azul.png">
				</a>
		</div>
		<div id="desenvolvido">
			<p class='ende filial'> 
				Desenvolvido por
			</p>	
		</div>
	</div>	
	<?php wp_footer(); ?>
</body>
</html>