<section class="image-block<?php if( $blockID['image_mask']) : ?> -hasMask<?php endif; ?><?php if( $blockID['has_margin']) : ?> -hasMargin<?php endif; ?>" id="<?php echo $blockID['content']; ?>" style="background-image: url('<?php echo $blockID['bg_image']; ?>')">

    <div class="container">

    <p>ACTIVE TAB: <?php echo $blockID['active_tab']; ?></p>

      <?php if ($blockID['icon']) : ?>
        <img src="<?php echo $blockID['icon'] ?>" alt="<?php echo $blockID['title'] ?>" class="block-icon" />
      <?php endif; ?>

      <?php if ($blockID['title']) : ?>
        <h1 class="title -imgTitle"><?php echo $blockID['title'] ?></h1>
      <?php endif; ?>

      <?php if ($blockID['intro_body']) : echo $blockID['intro_body']; endif; ?>

      <ul class="image-block-nav">
        <?php $args = array( 'post_type' => $blockID['content'], 'posts_per_page' => 999 ); $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : $counter = 1; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <li class="image-block-nav__item">
            <a href="#<?php echo $blockID['content']; ?>_<?php the_field('subsection_id'); ?>" title="<?php the_field('subsection_buttonLabel'); ?>" class="btn -hasChevron js-reveal-link" data-link-parent="<?php echo $blockID['content']; ?>"><?php the_field('subsection_buttonLabel'); ?><span class="btn__chevron"></span></a>
          </li>
          <?php if ( ($blockID['buttons_per_row'] > 0) && $counter % $blockID['buttons_per_row'] == 0 ) : ?>
            <li class="lineBreak"></li>
          <?php endif; ?>
        <?php $counter++; endwhile; wp_reset_postdata(); endif; ?>
      </ul>

    </div>
  </section>
  <?php
    $args = array( 'post_type' => $blockID['content'], 'posts_per_page' => 999 ); $the_query = new WP_Query( $args );
    $index = 1;
    if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
      $isActive = $blockID['active_tab'] == $index;
      $cssClass = $isActive ? "reveal-block -isActive" : "reveal-block";
      ?>

        <section class="<?php echo $cssClass;?>" data-reveal="<?php echo $blockID['content']; ?>_<?php the_field('subsection_id'); ?>" data-parent="<?php echo $blockID['content']; ?>">

        <p>ACTIVE TAB: <?php echo $blockID['active_tab']; ?></p>
        <p>INDEX: <?php echo $index; ?></p>

          <span class="reveal-block__close js-close-reveal"></span>
          <div class="container fade-in-down">
            <?php the_field('subsection_content'); ?>
          </div>
        </section>

    <?php $index++; endwhile; wp_reset_postdata(); endif; ?>
