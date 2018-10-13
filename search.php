<?php get_header();?>
  <section class="posts">
    <?php if(have_posts()): ?>
      <h2 class="archive__title">Resultado da busca</h2>
      <?php while(have_posts()):the_post() ?>
        <?php get_template_part('templates/card', 'home'); ?>
      <?php endwhile; ?>
    <?php else: ?>
      <h2 class="archive__title">Nenhum Resultado encontrado</h2>
      <p class="search__message">deseja realizar uma nova consulta?</p>
      <?php get_search_form(); ?>
    <?php endif; ?>
  <section>
<?php get_footer(); ?>