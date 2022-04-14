<?php get_header(); ?>

<main id="main" class="grid-container grid-y">

    <h1 class="cell text-center medium-text-right">Search: &nbsp; <?php the_search_query() ?></h1>

    <i class="fi-magnifying-glass"></i>

    <?php get_template_part('template-parts/loop', 'content'); ?>

    <?php get_search_form(); ?>

</main>

<?php get_footer(); ?>