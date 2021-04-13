<?php 
/*
Template Name: Homepage
*/
get_header(); ?>


  <!-- Image Block 1 -->
  <?php $blockID = get_field('block_1'); ?>
  <?php include get_theme_file_path("templates/partials/image-block.php"); ?>

  <?php /*
  <?php $blockID = get_field('block_1'); ?>
  <section class="image-block" id="<?php echo $blockID['block_content']; ?>" style="background-image: url('https://placeimg.com/1000/500/nature')">
    <div class="container">    
      <img src="<?php echo $blockID['icon'] ?>" alt="<?php echo $blockID['title'] ?>" class="block-icon -monitor" />
      <h1 class="title -imgTitle"><?php echo $blockID['title'] ?></h1>
      <ul class="image-block-nav">
      <?php $args = array( 'post_type' => $blockID['block_content'], 'posts_per_page' => 999 ); $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <li class="image-block-nav__item">
            <a href="#<?php the_field('subsection_id'); ?>" title="" class="btn -hasChevron js-reveal-link" data-link-parent="<?php echo $blockID['block_content']; ?>"><?php the_field('subsection_buttonLabel'); ?><span class="btn__chevron"></span></a>
          </li>        
      <?php endwhile; wp_reset_postdata(); endif; ?>
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
  */ ?>
  <!-- End: Image Block 1 -->
  


  <!-- Text Block -->
  <section class="text-block" id="learning">
    <div class="container">    
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/padlock.svg" alt="Why do you need security?" class="block-icon -padlock" />
      <h1 class="title">Why do you need security?</h1>
      <p>The GDPR requires you to process personal data securely. This is not a new data protection obligation. It replaces and mirrors the previous requirement to have ‘appropriate technical and organisational measures’ under the Data Protection Act 1998 (the 1998 Act).</p>
      <p>However, the GDPR provides more specifics about what you have to do about the security of your processing and how you should assess your information risk and put appropriate security measures in place. Whilst these are broadly equivalent to what was considered good and best practice under the 1998 Act, they are now a legal requirement.</p>
      
      <div class="iframe-embed">
        <iframe src="https://splashthat.com/sites/view/webinarinaboxupdated.splashthat.com?partial=495668687,510221805&screenshotHash=7386b542e7650be5&partner_referral_id=98304-25610&partner_name=Solutions+Squared+Limited" width="100%" height="450"></iframe>
      </div>

    </div>
  </section>
  <!-- End: Text Block -->


  
  
  <!-- Image Block 2 -->
  <?php $blockID = get_field('block_2'); ?>
  <?php include get_theme_file_path("templates/partials/image-block.php"); ?>

  <?php /*    
    <section class="image-block" id="sectors" style="background-image: url('https://placeimg.com/1000/500/nature')">
      <div class="container">    
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/info-white.svg" alt="Managed IT Security Services" class="block-icon -info" />
        <h1 class="title -imgTitle">Managed IT Security Services</h1>
        <ul class="image-block-nav">
          <li class="image-block-nav__item">
            <a href="#antivirus" title="" class="btn -hasChevron js-reveal-link" data-link-parent="security">Antivirus<span class="btn__chevron"></span></a>
          </li>
          <li class="image-block-nav__item">
            <a href="#firewall" title="" class="btn -hasChevron js-reveal-link" data-link-parent="security">Firewall<span class="btn__chevron"></span></a>
          </li>
          <li class="image-block-nav__item">
            <a href="#backup" title="" class="btn -hasChevron js-reveal-link" data-link-parent="security">Backup<span class="btn__chevron"></span></a>
          </li>
          <li class="image-block-nav__item">
            <a href="#email-filtering" title="" class="btn -hasChevron js-reveal-link" data-link-parent="security">Email Filtering<span class="btn__chevron"></span></a>
          </li>
          <li class="image-block-nav__item">
            <a href="#patch-management" title="" class="btn -hasChevron js-reveal-link" data-link-parent="security">Patch Management<span class="btn__chevron"></span></a>
          </li>
        </ul>
      </div>
    </section>
    
    <section class="reveal-block" data-reveal="antivirus" data-parent="security">
      <span class="reveal-block__close js-close-reveal"></span>
      <div class="container fade-in-down">      
        <h1 class="title">Deploy</h1>
        <p>The GDPR requires you to process personal data securely. This is not a new data protection obligation. It replaces and mirrors the previous requirement to have ‘appropriate technical and organisational measures’ under the Data Protection Act 1998 (the 1998 Act).</p>
        <p>However, the GDPR provides more specifics about what you have to do about the security of your processing and how you should assess your information risk and put appropriate security measures in place. Whilst these are broadly equivalent to what was considered good and best practice under the 1998 Act, they are now a legal requirement.</p>
      </div>
    </section>
    <section class="reveal-block" data-reveal="firewall" data-parent="security">
      <span class="reveal-block__close js-close-reveal"></span>
      <div class="container fade-in-down">
        <h1 class="title">Secure</h1>
        <p>The GDPR requires you to process personal data securely. This is not a new data protection obligation. It replaces and mirrors the previous requirement to have ‘appropriate technical and organisational measures’ under the Data Protection Act 1998 (the 1998 Act).</p>
        <p>However, the GDPR provides more specifics about what you have to do about the security of your processing and how you should assess your information risk and put appropriate security measures in place. Whilst these are broadly equivalent to what was considered good and best practice under the 1998 Act, they are now a legal requirement.</p>
      </div>
    </section>
    <section class="reveal-block" data-reveal="Backup" data-parent="security">
      <span class="reveal-block__close js-close-reveal"></span>
      <div class="container fade-in-down">      
        <h1 class="title">Support</h1>
        <p>The GDPR requires you to process personal data securely. This is not a new data protection obligation. It replaces and mirrors the previous requirement to have ‘appropriate technical and organisational measures’ under the Data Protection Act 1998 (the 1998 Act).</p>
        <p>However, the GDPR provides more specifics about what you have to do about the security of your processing and how you should assess your information risk and put appropriate security measures in place. Whilst these are broadly equivalent to what was considered good and best practice under the 1998 Act, they are now a legal requirement.</p>
      </div>
    </section>
  */ ?>
  <!-- End: Image Block 2 -->



  <!-- Sophos Threat Dashboard -->
  <section class="text-block">
    <div class="container">    
      <h1 class="title">Sophos threat dashboard</h1>
      <p>Duis vel placerat arcu, sed malesuada felis. Praesent venenatis libero ultrices, molestie libero vitae, viverra libero. Etiam mollis urna neque, nec cursus enim rutrum id. Aliquam a dolor dapibus, laoreet leo eu, sagittis libero. Donec eget scelerisque lacus. Integer condimentum egestas arcu non eleifend. Nam magna massa, tristique sit amet sodales non, bibendum vitae urna. Nullam sollicitudin enim nec lectus aliquam, a fringilla lectus malesuada. Donec vel maximus erat. Sed vitae massa massa.</p>

      <div class="iframe-embed">
        <iframe src="https://partnerportal.sophos.com/en-us/microsite/threat-dashboard-tool/horizontal.aspx?partner_referral_id=98304-25610&partner_name=Solutions+Squared+Limited" width="706" height="280"></iframe>
      </div>

    </div>
  </section>
  <!-- End: Sophos Threat Dashboard -->
  


  <!-- Image Block -->
  <section class="image-block" id="" style="background-image: url('https://placeimg.com/1000/500/nature')">
    <div class="container">    
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/globe-white.svg" alt="Put the web to work" class="block-icon -globe" />
      <h1 class="title -imgTitle">Put the web to work</h1>
      <ul class="image-block-nav">
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Design<span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Build<span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Update<span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Promote<span class="btn__chevron"></span></a>
        </li>
      </ul>
    </div>
  </section>
  <!-- End: Image Block -->


  <!-- Image Block -->
  <section class="image-block" id="" style="background-image: url('https://placeimg.com/1000/500/nature')">
    <div class="container">    
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/drive-white.svg" alt="Cloud Services" class="block-icon -drive" />
      <h1 class="title -imgTitle">Cloud Services</h1>
      <ul class="image-block-nav">
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Email Office 365<span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Sharepoint and OneDrive <span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Online Backup <span class="btn__chevron"></span></a>
        </li>
        <li class="lineBreak"></li>
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Networks <span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Servers <span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Firewalls <span class="btn__chevron"></span></a>
        </li>
      </ul>
    </div>
  </section>
  <!-- End: Image Block -->


<!-- Image Block -->
  <section class="image-block -hasMask" id="about" style="background-image: url('https://placeimg.com/1000/500/nature')">
    <div class="container">    
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icons/lightbulb-white.svg" alt="Partner Services" class="block-icon -lightbulb" />
      <h1 class="title -imgTitle">Partner Services</h1>
      <p>Through our carefully selected partner companies we are able to extend the services that we offer to make us a truely “one stop shop” for all your IT needs. We can obtain competitive pricing on connectivity for your business, hosted telephone systems, managed print solutions and financing or lease solutions to defray the capital cost of your IT expenditure.</p>
      <ul class="image-block-nav">
        <li class="image-block-nav__item">
          <a href="#" title="" class="btn -hasChevron">Design<span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
        <a href="#" title="" class="btn -hasChevron">Build<span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
        <a href="#" title="" class="btn -hasChevron">Update<span class="btn__chevron"></span></a>
        </li>
        <li class="image-block-nav__item">
        <a href="#" title="" class="btn -hasChevron">Promote<span class="btn__chevron"></span></a>
        </li>
      </ul>
    </div>
  </section>
  <!-- End: Image Block -->


  <!-- Testimonials -->
  <section class="testimonials-block slider">

    <blockquote class="testimonial">
      <span class="testimonial__company">[Company Name]</span>
      <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis.”</p>
      <span class="testimonial__author">John Snow, Managing Director.</span>
    </blockquote>

    <blockquote class="testimonial">
      <span class="testimonial__company">[Company Name]</span>
      <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis.”</p>
      <span class="testimonial__author">John Snow, Managing Director.</span>
    </blockquote>

    <blockquote class="testimonial">
      <span class="testimonial__company">[Company Name]</span>
      <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis.”</p>
      <span class="testimonial__author">John Snow, Managing Director.</span>
    </blockquote>

  </section>
  <!-- End: Testimonials -->


  <!-- News -->
  <section class="contact-block" id="news">
    <div class="container">

      <div class="iframe-embed">
        <iframe src="https://partnerportal.sophos.com/en-us/microsite/newssync/micro-horizontal-full.aspx?partner_referral_id=98304-25610&partner_name=Solutions+Squared+Limited" width="1000" height="155"></iframe>
      </div>

      <!-- <h1 class="title">Latest industry news</h1>
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
      </div> -->

    </div>
  </section>
  <!-- End: News -->

  <!-- Contact -->
  <section class="contact-block" id="contact">
    <div class="container">
      <h1 class="title">Have a project in mind?</h1>
      <a href="" title="Work with us" class="btn -centre">Work with us</a>
    </div>
  </section>
  <!-- End: Contact -->


  <!-- Twitter Feed -->
  <section class="contact-block twitter-feed">
    <div class="container">
      <?php echo do_shortcode('[custom-twitter-feeds]'); ?>
    </div>
  </section>
  <!-- End: Twitter Feed -->




<?php get_footer(); ?>
