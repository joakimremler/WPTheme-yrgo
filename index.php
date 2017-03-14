
<?php get_header(); ?>


  <div class="row">
    <div class="col-md">

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        <?php endwhile; ?>
    <?php endif; ?>


    </div>
  </div>



<script>
let navbar = document.querySelectorAll(".nav-link");
Array.from(navbar).forEach(function(ele) {
  console.log(ele);
  ele.addEventListener("click", function() {
    ele.className += " active";
  })
});
</script>



<?php get_footers(); ?>
