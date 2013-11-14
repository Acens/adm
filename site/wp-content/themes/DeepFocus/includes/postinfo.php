<?php if (!is_single() && get_option('deepfocus_postinfo1') <> '') { ?>
	<p class="post-meta"><?php esc_html_e('Posted','DeepFocus'); ?> <?php if (in_array('author', get_option('deepfocus_postinfo1'))) { ?> <?php esc_html_e('by','DeepFocus'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('deepfocus_postinfo1'))) { ?> <?php esc_html_e('on','DeepFocus'); ?> <?php the_time(get_option('deepfocus_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('deepfocus_postinfo1'))) { ?> <?php esc_html_e('in','DeepFocus'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('deepfocus_postinfo1'))) { ?> | <?php comments_popup_link(esc_html__('0 comments','DeepFocus'), esc_html__('1 comment','DeepFocus'), '% '.esc_html__('comments','DeepFocus')); ?><?php }; ?></p>
	<div class="clear"></div>
<?php } elseif (is_single() && get_option('deepfocus_postinfo2') <> '') { ?>
	<p class="post-meta">
		<?php esc_html_e('Posted','DeepFocus'); ?> <?php if (in_array('author', get_option('deepfocus_postinfo2'))) { ?> <?php esc_html_e('by','DeepFocus'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('deepfocus_postinfo2'))) { ?> <?php esc_html_e('on','DeepFocus'); ?> <?php the_time(get_option('deepfocus_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('deepfocus_postinfo2'))) { ?> <?php esc_html_e('in','DeepFocus'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('deepfocus_postinfo2'))) { ?> | <?php comments_popup_link(esc_html__('0 comments','DeepFocus'), esc_html__('1 comment','DeepFocus'), '% '.esc_html__('comments','DeepFocus')); ?><?php }; ?>
	</p>
<?php }; ?>