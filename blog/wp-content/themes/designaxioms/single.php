<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<!--<div class="entry-meta">
                        <span class="meta-prep meta-prep-author"></?php _e('By ', 'your-theme'); ?></span>
                        <span class="author vcard"><a class="url fn n" href="</?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="</?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"></?php the_author(); ?></a></span>
                        <span class="meta-sep"> | </span>
                        <span class="meta-prep meta-prep-entry-date"></?php _e('Published ', 'your-theme'); ?></span>
                        <span class="entry-date"><abbr class="published" title="</?php the_time('Y-m-d\TH:i:sO') ?>"></?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                        </?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
                    </div><!-- .entry-meta -->
		<p><span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                         on <?php the_time('j F Y'); ?> <!--at </?php the_time('g:i a'); ?>--></p>
						 
		<?php the_content(); ?>
		
		<p><?php the_category(', '); ?> | <?php comments_number('No comments', '1 comment', '% comments'); ?></p>
		<hr>
		<?php comments_template(); // Get wp-comments.php template ?>
		<?php endwhile; else: ?>
		<p>Sorry, no posts we're found.</p>
		<?php endif; ?>
		<p align="center"><?php posts_nav_link(); ?></p>
	</div>

<?php get_footer(); ?>