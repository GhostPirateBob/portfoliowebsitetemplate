<?php get_header(); ?>

<main id="main" class="grid-container grid-y">

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <h1 class="cell text-right"> <?php the_title(); ?> </h1>

            <i class="fi-comments"></i>

            <?php the_content() ?>

            <?php edit_post_link(); ?>

            <?php the_post_navigation(array(
                'prev_text' => '← %title',
                'next_text' => '→ %title',
                'screen_reader_text' => 'Continue Reading',
            )); ?>

            <p>
                By:&nbsp;
                <?php the_author(); ?>
                ,
                <?php echo get_the_date(); ?>
            </p>

            <?php the_category();  ?>

            <?php if (the_tags()) { ?>
			
			<p>

				<?php the_tags(); ?>

			</p>

           	<?php } ?>

            <?php if (comments_open() || get_comments_number()) {
                comments_template();
            } ?>

        <?php } ?>

    <?php } ?>

</main>

<?php get_footer(); ?>