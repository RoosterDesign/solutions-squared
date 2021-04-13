<section class="image-block" id="<?php echo $blockID['block_content']; ?>" style="background-image: url('https://placeimg.com/1000/500/nature')">
    <div class="container">
      <img src="<?php echo $blockID['icon'] ?>" alt="<?php echo $blockID['title'] ?>" class="block-icon -monitor" />
      <h1 class="title -imgTitle"><?php echo $blockID['title'] ?></h1>
      <ul class="image-block-nav">

      <?php $args = array( 'post_type' => $blockID['block_content'], 'posts_per_page' => 999 ); $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : $counter = 1; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <li class="image-block-nav__item">
            <a href="#<?php the_field('subsection_id'); ?>" title="" class="btn -hasChevron js-reveal-link" data-link-parent="<?php echo $blockID['block_content']; ?>"><?php the_field('subsection_buttonLabel'); ?><span class="btn__chevron"></span></a>
          </li>
          <?php if ( ($blockID['icons_per_row'] > 0) && $counter % $blockID['icons_per_row'] == 0 ) : ?>
            <li class="lineBreak"></li>
          <?php endif; ?>
      <?php $counter++; endwhile; wp_reset_postdata(); endif; ?>
      </ul>
    </div>
  </section>
  <?php $args = array( 'post_type' => $blockID['block_content'], 'posts_per_page' => 999 ); $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <section class="reveal-block" data-reveal="<?php the_field('subsection_id'); ?>" data-parent="<?php echo $blockID['block_content']; ?>">
          <span class="reveal-block__close js-close-reveal"></span>
          <div class="container fade-in-down">      
            <?php the_field('subsection_content'); ?>
          </div>
        </section>
    <?php endwhile; wp_reset_postdata(); endif; ?>