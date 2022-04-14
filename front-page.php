<?php get_header(); ?>

<h2 id="orbit-heading" class="text-center medium-text-right"><?php echo the_field('heading') ?></h2>

<div class="orbit" data-options="animInFromLeft:fade-in;
    animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;"
    role="region" aria-label="Portfolio slider"
    data-orbit>
    <div class="orbit-wrapper">
    <ul class="orbit-container">
        <li class="is-active orbit-slide">
            <?php
            $image = get_field('carousel_1');
            if (!empty($image)) { ?>
            <img class="orbit-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php } ?>
        </li>
        <li class="orbit-slide">
            <?php
            $image = get_field('carousel_2');
            if (!empty($image)) { ?>
            <img class="orbit-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php } ?>
        </li>
    </ul>
    </div>
</div>

<main id="main" class="grid-container grid-y">

    <section class="grid-x align-center stack-for-small
    media-object">

    <div class="cell medium-order-2 medium-7 large-6 grid-x align-justify
        media-object-section">

        <h3 class="cell text-center medium-text-left small-12"><?php echo the_field('media_heading') ?></h3>
        <p class="cell small-12"><?php echo the_field('media_paragraph') ?></p>

        <div class="grid-x align-bottom">

        <p class="cell medium-text-right medium-order-2 small-7 medium-6"><?php echo the_field('media_paragraph_1') ?></p>
        <h4 class="cell text-center medium-order-1 subheader align-self-middle medium-text-left small-5 medium-6"><?php echo the_field('media_heading_1') ?></h4>
        <p class="cell small-7 medium-6"><?php echo the_field('media_paragraph_2') ?></p>
        <h4 class="cell text-center subheader align-self-middle medium-text-right small-5 medium-6"><?php echo the_field('media_heading_2') ?></h4>

        </div>

    </div>

    <div class="cell medium-order-1 medium-5 large-6 align-self-middle
        media-object-section">

            <?php
            $image = get_field('media');
            if (!empty($image)) { ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php } ?>

    </div>

    </section>

    <section class="grid-x p-left">

    <h4 class="cell medium-order-2 small-12 medium-5 medium-text-center"><?php echo the_field('section_heading_1') ?></h4>

    <p class="cell medium-order-1 medium-text-left small-12 medium-7"><?php echo the_field('section_paragraph_1') ?></p>

    </section>

    <section class="grid-x p-right">

    <h4 class="cell text-right small-12 medium-5 medium-text-center"><?php echo the_field('section_heading_2') ?></h4>

    <p class="cell text-right small-12 medium-7"><?php echo the_field('section_paragraph_2') ?></p>

    </section>

</main>

<?php get_footer(); ?>