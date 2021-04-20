<?php $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 999 ); $the_query = new WP_Query( $args );  if ( $the_query->have_posts() ) : ?>
  <section class="testimonials-block slider">  
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <blockquote class="testimonial">
    <span class="testimonial__company"><?php the_title(); ?></span>
      <?php the_content(); ?>
      <span class="testimonial__author"><?php the_field('client_name'); ?></span>
    </blockquote>
    <?php endwhile; ?>
  </section>
<?php wp_reset_postdata(); endif; ?>