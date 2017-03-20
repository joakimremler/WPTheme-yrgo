<?php /* Template Name: About */ ?>

<?php get_header(); ?>


<?php
print '<pre>';
// print_r(get_posts());
// print get_posts(['post_type'] => ' employee');
print_r (get_posts(['post_type' => 'employee']));

 ?>
  <div class="row">
    <div class="col-xs">

    <?php if (have_posts()): ?>
<?php foreach (get_posts(['post_type' => 'employee']) as $employee ): ?>
            <h1><?php $employee -> ; ?></h1>
            <?php the_content(); ?>

<?php endforeach; ?>
    <?php endif; ?>

    </div>
  </div>

<?php get_footers(); ?>
