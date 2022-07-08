<?php if ($textBlockID['id'] != ''): ?>

  <section class="text-block" id="<?php echo $textBlockID['id'] ?>">
    <div class="container">    

      <?php if ($textBlockID['icon']) : ?>
        <img src="<?php echo $textBlockID['icon'] ?>" alt="<?php echo $textBlockID['title'] ?>" class="block-icon" />
      <?php endif; ?>

      <?php if ($textBlockID['title']) : ?>
        <h1 class="title"><?php echo $textBlockID['title']; ?></h1>
      <?php endif; ?>

      <?php if ($textBlockID['body']) : echo $textBlockID['body']; endif; ?>

      <?php if ($textBlockID['embed_code']) : ?>
        <div class="iframe-embed">
          <?php echo $textBlockID['embed_code']; ?>
        </div>
      <?php endif; ?>    

    </div>
  </section>

<?php endif; ?>