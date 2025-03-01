<?php get_header() ?>
<h1>This is individual blog post page</h1>

<?php
while (have_posts()) {
  the_post(); ?>
  <h2><?php the_title() ?></h2>
  <div class="content">
    <p><?php the_content() ?></p>
  </div>
<?php

}

?>

<?php get_footer() ?>