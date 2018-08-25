<article <?php post_class('postCard')?>>
  <figure class="postCard__thumbnail">
    <?php the_post_thumbnail('large-post-size'); ?>
  </figure>
  <div class="postCard__info">
    <h2 class="postCard__title"><?php the_title(); ?></h2>
    <time><?php the_time('F j, Y'); ?></time>
    <div class="postCard__excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
