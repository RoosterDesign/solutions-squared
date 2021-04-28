<?php 
/*
Template Name: Homepage
*/
get_header(); ?>

  <!-- Image Block 1 -->
  <?php $blockID = get_field('block_1'); ?>
  <?php include get_theme_file_path("templates/partials/image-block.php"); ?>
  <!-- End: Image Block 1 -->

  <!-- Text Block -->  
  <?php $textBlockID = get_field('text_block_1'); ?>
  <?php include get_theme_file_path("templates/partials/text-block.php"); ?>
  <!-- End: Text Block --> 
  
  <!-- Image Block 2 -->
  <?php $blockID = get_field('block_2'); ?>
  <?php include get_theme_file_path("templates/partials/image-block.php"); ?>
  <!-- End: Image Block 2 -->

  <!-- Text Block 2 -->  
  <?php $textBlockID = get_field('text_block_2'); ?>
  <?php include get_theme_file_path("templates/partials/text-block.php"); ?>
  <!-- End: Text Block 2 -->
  
  <!-- Image Block 3 -->
  <?php $blockID = get_field('block_3'); ?>
  <?php include get_theme_file_path("templates/partials/image-block.php"); ?>
  <!-- End: Image Block 3 -->

  <!-- Image Block 4 -->
  <?php $blockID = get_field('block_4'); ?>
  <?php include get_theme_file_path("templates/partials/image-block.php"); ?>
  <!-- End: Image Block 4 -->

  <!-- Image Block 5 -->
  <?php $blockID = get_field('block_5'); ?>
  <?php include get_theme_file_path("templates/partials/image-block.php"); ?>
  <!-- End: Image Block 5 -->

  <!-- Testimonials -->
  <?php $testimonialsBlock = get_field('testimonials_block'); ?>
  <?php include get_theme_file_path("templates/partials/testimonials-block.php"); ?>  
  <!-- End: Testimonials -->

  <!-- News -->
  <?php $newsBlock = get_field('news_block'); ?>
  <?php include get_theme_file_path("templates/partials/news-block.php"); ?>
  <!-- End: News -->


  <!-- Contact -->
  <section class="contact-block" id="contact">
    <div class="container">
      <h1 class="title">Have a project in mind?</h1>
      <a href="#contact" title="Work with us" class="btn -centre js-reveal-link" data-link-parent="contact">Work with us</a>
    </div>
  </section>

  <section class="reveal-block" data-reveal="contact" data-parent="contact">
    <span class="reveal-block__close js-close-reveal"></span>
    <div class="container fade-in-down">
      <h1>Get in touch</h1>
      <?php echo do_shortcode('[contact-form-7 id="185" title="Contact form"]'); ?>
      <?php include get_theme_file_path("templates/partials/map-address.php"); ?>      
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