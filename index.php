<?php get_header(); ?>
  <main class="container home" role="main">
    <section class="posts">
      <h2 class="posts__title">Post recentes</h2>
      <?php
        while ( have_posts() ) : the_post();
          get_template_part( 'templates/post', 'card' );
        endwhile;
      ?>
    </section>
  </main>
<?php get_footer(); ?>