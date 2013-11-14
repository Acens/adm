				<div id="footer">
					<div id="footer-wrapper">
						<div id="footer-center">
							<div class="container">
								
									<div id="footer-widgets" class="clearfix">
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?> 
										<?php endif; ?>
									</div> <!-- end #footer-widgets -->	
								
							
								<p id="copyright">
									<span>Desenvolvido por</span>
									<a href="http://www.acens.com.br" title="Desenvolvido por Acens">
									<img src="http://localhost/adm/site/wp-content/uploads/2013/11/acens-logo.png" alt="Acens Empresa Júnior"/></p>
							</div> <!-- end .container -->
						</div> <!-- end #footer-center -->
					</div> <!-- end #footer-wrapper -->
				</div> <!-- end #footer -->

			</div> <!-- end .center-highlight -->

	</div> <!-- end #content-full -->
		
	<?php get_template_part('includes/scripts'); ?>

	<?php wp_footer(); ?>	
</body>
</html>