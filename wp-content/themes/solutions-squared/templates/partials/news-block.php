<section class="contact-block" id="news">
    <div class="container">

     <?php if ($newsBlock['title']) : ?>
        <h1 class="title"><?php echo $newsBlock['title']; ?></h1>
      <?php endif; ?>
      <a href="/news" title="News" class="btn -centre" data-link-parent="contact">See all news</a>

      <div class="news-items-wrap">
        <?php
          $args = array( 'posts_per_page' => 3, 'post_type' => 'post' );
          $post_query = new WP_Query($args);          
          if($post_query->have_posts() ) { while($post_query->have_posts() ) { $post_query->the_post(); ?>
            <article class="news-item">
              <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="https://placeimg.com/423/270/nature" class="news-item__img" alt="<?php the_title(); ?>"/></a>              
              <h1 class="news-item__title"><?php the_title(); ?></h1>
              <p><?php echo get_excerpt(200); ?></p>
              <a href="<?php the_permalink(); ?>" alt="Read more" class="news-item__link">Read more></a>
            </article>
        <?php } } ?>
      </div>

      

      <?php if ($newsBlock['embed_code']) : ?>
        <div class="iframe-embed -m-top">
          <?php echo $newsBlock['embed_code']; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>