<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <?php wp_head(); ?>
</head>
<body>

  <?php
  // print '<pre>';
  // print_r(get_pages());
  ?>

  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <?php if (have_posts()): ?>
          <?php foreach (get_pages() as $page): ?>
            <li class="nav-item">
              <a class="nav-link <?php (get_the_title() === $page->post_title)? print "active" : ""; ?>" href="<?php print $page->guid; ?>"><?php print $page->post_title; ?></a>
            </li>
            <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <main class="container">
