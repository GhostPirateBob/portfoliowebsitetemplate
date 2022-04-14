<?php get_header(); ?>

<main id="main" class="grid-container grid-y">

    <h2 class="cell text-center medium-text-right">Biography</h2>

    <i class="fi-pencil"></i>

    <div class="grid-x">

        <div class="cell text-center medium-order-2 small-12 medium-6"
            data-sticky-container>
            <div class="sticky" data-sticky data-margin-top="12"
                data-anchor="stick-1">
                <?php
                $image = get_field('sticky_image_1');
                if (!empty($image)) { ?>
                <img class="thumbnail" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php } ?>
            </div>
        </div>

        <div id="stick-1" class="cell text-center medium-order-1 medium-text-left small-12 medium-6">

            <?php echo the_field('biography_1') ?>

        </div>

    </div>

    <div class="grid-x">

        <div class="cell text-center small-12 medium-6"
            data-sticky-container>
            <div class="sticky" data-sticky data-margin-top="12"
                data-anchor="stick-2">
                <?php
                $image = get_field('sticky_image_2');
                if (!empty($image)) { ?>
                <img class="thumbnail"  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php } ?>
            </div>
        </div>

        <div id="stick-2" class="cell text-center medium-text-right small-12 medium-6">

            <?php echo the_field('biography_2') ?>
           
        </div>

    </div>

    <section class="grid-x align-center">

        <div class="cell small-12 medium-5 card">

            <div class="card-divider">
                <?php echo the_field('card_title') ?>
            </div>

            <?php
            $image = get_field('portrait');
            if (!empty($image)) { ?>
            <img  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php } ?>

            <div class="card-section">

                <h3>  <?php echo the_field('card_heading') ?></h3>
                <p> <?php echo the_field('card_paragraph') ?> </p>

            </div>

        </div>

    </section>

</main>    
	
<?php get_footer(); ?>