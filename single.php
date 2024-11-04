<?php get_header(); ?>
<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<p class="postDate"><?php echo get_the_date('jS F Y'); ?></p>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-img'); } ?>
			<?php the_content(); ?>
			<br />
			<p><a href="/" title="Back to homepage">Back to homepage</a></p>
		</article>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>