<article <?php post_class("postCard"); ?>>
  <?php the_post_thumbnail('thumb-post'); ?>
  <div class="postCard__time">
      <span class="postCard__time__day" ><?php the_time('d'); ?></span>
      <span class="postCard__time__month"><?php the_time('M'); ?></span>
  </div>
  <div class="postCard__info">
    <h2 class="postCard__title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
    <div class="postCard__category">
      <?php the_category(); ?>
    </div>
    <div class="postCard__excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>
  <footer class="postCard__footer">
    publicado por: <?php the_author_posts_link(); ?>
  </footer>
</article>