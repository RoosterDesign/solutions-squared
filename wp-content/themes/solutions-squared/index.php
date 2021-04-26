<?php get_header(); ?>

<div class="container blog-list">

	<div class="blog-list-main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="blog-list-article">

				<header class="blog-list-article__header mh">
					<h1 class="blog-list-article__title"><?php the_title(); ?></h1>
					<div class="post-meta">					
						<?php echo get_the_date('jS F Y'); ?>&nbsp;/&nbsp;					
						<?php echo get_the_category_list(', '); ?>		
						<?php $my_tags = get_the_tags();
						if ( $my_tags ) { ?>
							&nbsp;/&nbsp;
							<?php foreach ( $my_tags as $tag ) {
									$tag_names[] = '<a href="'.get_tag_link( $tag->term_id ).'" rel="tag" title="'.$tag->name.'">'.$tag->name.'</a>';
							}
								echo implode( ', ', $tag_names );
						} ?>					
					</div>
				</header>

				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="https://placeimg.com/423/270/nature" class="news-item__img" alt="<?php the_title(); ?>"/></a>
				<p><?php echo get_excerpt(200); ?></p>
				<a href="<?php the_permalink(); ?>" alt="Read more" class="news-item__link">Read more></a>
			</article>
		<? endwhile; ?>

		<div class="pagination">		
			<div class="pagination__link"><?php next_posts_link( '< Older posts' ); ?></div>	
			<div class="pagination__link"><?php previous_posts_link( 'Newer posts >' ); ?></div>			
		</div>

		<?php else : ?>
			<p>No articles available.</p>
		<?php endif; ?>	
		
	</div>

	<aside class="blog-list-sidebar">
		<?php get_sidebar(); ?>
	</aside>

</div>

<?php get_footer(); ?>