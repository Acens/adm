<?php
	if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) && ! is_active_sidebar( 'sidebar-4' ) && ! is_active_sidebar( 'sidebar-5' ) )
		return;
?>

<footer id="main-footer">
	<div id="footer-widgets" class="clearfix">
	<?php
		$footer_sidebars = array( 'sidebar-2', 'sidebar-3', 'sidebar-4', 'sidebar-5' );

		foreach ( $footer_sidebars as $key => $footer_sidebar ) :
			if ( is_active_sidebar( $footer_sidebar ) ) :
				echo '<div class="footer-widget' . ( 3 === $key ? ' last' : '' ) . '">';
				dynamic_sidebar( $footer_sidebar );
				echo '</div> <!-- end .footer-widget -->';
			endif;
		endforeach;
	?>
	<div id="contato-footer-1">
			<h5>QUEM SOMOS</h5>
		<div class="textwidget-1">
			<br>Pioneira no Estado, desde 1992, <br>vem proporcionando desenvolvimento <br>profissional e possibilitando elevada <br>satisfação aos seus clientes.
		</div><!--end #textwidget-1-->
	</div><!--end #contato-footer-1-->
	<div id="contato-footer-2">
			<h5>ATENDIMENTO</h5>
		<div class="textwidget-2">
				<br>De Seg à Sex, das 6 às 18 horas
				<br>Tel|+55 85 3101-9936
				<br>Avenida Dedé Brasil, 1700
				Universidade Estadual do Ceará, Bloco CESA, Sala 1		
		</div><!--end #textwidget-2-->
		
	</div><!--end #contato-footer-->

	</div> <!-- #footer-widgets -->
</footer> <!-- #main-footer -->