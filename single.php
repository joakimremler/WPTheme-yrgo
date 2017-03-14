<?php get_header(); ?>


<?php
// print_r(get_pages());

 ?>
  <div class="row">
    <div class="col-xs">

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_excerpt(); ?>test
        <?php endwhile; ?>
    <?php endif; ?>

    </div>
  </div>
<?php get_footers(); ?>
