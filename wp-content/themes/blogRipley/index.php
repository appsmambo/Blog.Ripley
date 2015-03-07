<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<div id="masonry-loop">
	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'masonry'); ?>
	<?php endwhile; ?>
</div><!--/#masonry-loop-->
<?php //twentythirteen_paging_nav(); ?>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>