<?php $i = 1;
	if ( is_home() ){
		$allCats = get_categories();
		$args = array('category__not_in' => (array) get_option('deepfocus_exlcats_recentworks'),
				  'showposts' => (int) get_option('deepfocus_portfolio_number'));
		query_posts($args);
	}
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="item<?php if ($i%4 == 0) echo(' last'); ?>">
		<div class="item-image">
			<?php 
			$width = 207;
			$height = 136;
			$titletext = get_the_title();

			$thumbnail = get_thumbnail($width,$height,'portfolio',$titletext,$titletext,true,'Portfolio');
			$thumb = $thumbnail["thumb"];
			print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, 'portfolio'); ?>
			<span class="overlay"></span>
			
			<a class="zoom-icon fancybox" title="<?php the_title(); ?>" rel="gallery" href="<?php echo($thumbnail['fullpath']); ?>"><?php esc_html_e('Zoom in','DeepFocus'); ?></a>
			<a class="more-icon" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more','DeepFocus'); ?></a>
		</div> <!-- end .item-image -->
	</div> <!-- end .item -->
<?php $i++; endwhile; endif; if ( is_home() ) wp_reset_query(); ?>