<?php if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>

    <h2 class="cell text-right">
      <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
    </h2>

    <i class="fi-pencil"></i>

    <?php the_content() ?>

    <p>

      Comments:

      <?php comments_popup_link(); ?>

    </p>

  <?php } ?>

<?php } else { ?>

  <p>Sorry, we cant find anything</p>

<?php } ?>