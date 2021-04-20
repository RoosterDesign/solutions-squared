<section class="contact-block" id="news">
    <div class="container">

     <?php if ($newsBlock['title']) : ?>
        <h1 class="title"><?php echo $newsBlock['title']; ?></h1>
      <?php endif; ?>

      <div class="news-items-wrap">
        <article class="news-item">
          <img src="https://placeimg.com/423/270/nature" class="news-item__img" />
          <h1 class="news-item__title">Article Title</h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <a href="#" alt="Read more" class="news-item__link">Read more ></a>
        </article>
        <article class="news-item">
          <img src="https://placeimg.com/423/270/nature" class="news-item__img" />
          <h1 class="news-item__title">Article Title</h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <a href="#" alt="Read more" class="news-item__link">Read more ></a>
        </article>
        <article class="news-item">
          <img src="https://placeimg.com/423/270/nature" class="news-item__img" />
          <h1 class="news-item__title">Article Title</h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <a href="#" alt="Read more" class="news-item__link">Read more ></a>
        </article>
      </div>

      <?php if ($newsBlock['embed_code']) : ?>
        <div class="iframe-embed -m-top">
          <?php echo $newsBlock['embed_code']; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>