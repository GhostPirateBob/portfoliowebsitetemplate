<?php get_header(); 

$disclaimer = get_field('disclaimer');

?>

<div id="fixed-img" style="background-image: url('<?php the_field('fixed_image'); ?>');" class="grid-y align-center" role="img" aria-label="this is how you make art">

    <h2 class="cell"><?php echo the_field('heading') ?></h2>

</div>

<main id="main" class="grid-y">

    <ul class="cell grid-x text-center menu align-center" data-tabs id="tabs">
        <li class="cell small-6 medium-2 large-shrink tabs-title is-active"><a aria-selected="true" href="#panel1">
                <h3>Film</h3>
            </a></li>
        <li class="cell small-6 medium-2 large-shrink tabs-title"><a data-tabs-target="panel2"
                href="#panel2">
                <h3>Theatre</h3>
            </a></li>
        <li class="cell small-6 medium-2 large-shrink tabs-title"><a data-tabs-target="panel3"
                href="#panel3">
                <h3>Design</h3>
            </a></li>
        <li class="cell small-6 medium-2 large-shrink tabs-title"><a data-tabs-target="panel4"
                href="#panel4">
                <h3>Poetry</h3>
            </a></li>
        <li class="cell small-6 medium-2 large-shrink tabs-title"><a data-tabs-target="panel5"
                href="#panel5">
                <h3>Sculptures</h3>
            </a></li>
        <li class="cell small-6 medium-2 large-shrink tabs-title"><a data-tabs-target="panel6"
                href="#panel6">
                <h3>Illustrations </h3>
            </a></li>
    </ul>

    <div class="tabs-content text-center" data-tabs-content="tabs">

        <div class="tabs-panel is-active" id="panel1">

            <div class="grid-x align-right">

                <ul class="cell sticky-ul grid-x small-12 medium-3 large-2 text-left
                    vertical menu
                    align-top">
                    <li> <i class="cell text-left fi-thumbnails"></i></li>
                    <li>Productions:
                        <ul class="nested vertical bullet menu">
                            <li><i class="fi-list"></i><a
                                    href="#storyboard">Storyboarding</a></li>
                            <li><i class="fi-list"></i><a
                                    href="#concept">Concept art</a></li>
                        </ul>
                    </li>
                    <li><i class="fi-list"></i><a href="#independent">Independent
                            creations</a></li>
                    <li class="cell small-8 medium-10  last"><?php echo $disclaimer ?></li>
                </ul>

                <div class="cell small-12 medium-9 large-10 grid-x
                    text-center align-center">

                    <section class="cell grid-x
                        text-center align-center">

                        <h4 id="storyboard" class="cell text-right">Storyboarding</h4>
                        <a aria-label="Go to top" class="cell top-link
                            text-right" href="#tabs"><i
                                class="fi-eject"></i></a>

                        <?php
                        $loop = new WP_Query(array('post_type' => 'storyboarding_films', 'posts_per_page' => -1));

                        while ($loop->have_posts()) { $loop->the_post();

                        ?>
                        
                        <?php
                        $image = get_field('storyboarding_films');
                        if (!empty($image)) : ?>
                            <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <?php } ?>

                    </section>

                    <section class="cell grid-x
                        text-center align-center">

                        <h4 id="concept" class="cell text-right">Concept
                            art</h4>

                        <a aria-label="Go to top" class="cell top-link
                            text-right" href="#tabs"><i
                                class="fi-eject"></i></a>
                        
                        <?php
                        $loop = new WP_Query(array('post_type' => 'concepts_films', 'posts_per_page' => -1));

                        while ($loop->have_posts()) { $loop->the_post();

                        ?>
                        
                        <?php
                        $image = get_field('concepts_films');
                        if (!empty($image)) : ?>
                            <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <?php } ?>        

                    </section>

                    <section class="cell grid-x
                        text-center
                        align-center">

                        <h4 id="independent" class="cell text-right">Independent
                            creations</h4>

                        <a aria-label="Go to top" class="cell top-link
                            text-right" href="#tabs"><i
                                class="fi-eject"></i></a>
                        
                        <?php
                        $loop = new WP_Query(array('post_type' => 'independent_films', 'posts_per_page' => -1));

                        while ($loop->have_posts()) { $loop->the_post();

                        ?>
                        
                        <?php
                        $image = get_field('independent_films');
                        if (!empty($image)) : ?>
                            <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <?php } ?>        

                    </section>

                </div>

            </div>

        </div>

        <div class="tabs-panel" id="panel2">

            <div class="grid-x align-right">

                <ul class="cell sticky-ul grid-x small-12 medium-3 large-2 text-left
                    vertical menu
                    align-top">
                    <li> <i class="cell text-left fi-thumbnails"></i></li>
                    <li>Theatre:</li>
                    <li class="cell small-8 medium-10  last"><?php echo $disclaimer ?></li>
                </ul>

                <section class="cell small-12 medium-9 large-10 grid-x
                    text-center align-center">

                    <h4 class="cell text-right"> Theatre</h4>

                    <a aria-label="Go to top" class="cell top-link
                        text-right" href="#tabs"><i
                            class="fi-eject"></i></a>

                    <?php
                    $loop = new WP_Query(array('post_type' => 'theatre', 'posts_per_page' => -1));

                    while ($loop->have_posts()) { $loop->the_post();

                    ?>
                    
                    <?php
                    $image = get_field('theatre');
                    if (!empty($image)) : ?>
                        <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    <?php } ?> 

                </section>

            </div>

        </div>

        <div class="tabs-panel" id="panel3">

            <div class="grid-x align-right">

                <ul class="cell sticky-ul grid-x small-12 medium-3 large-2 text-left
                    vertical menu
                    align-top">
                    <li> <i class="cell text-left fi-thumbnails"></i></li>
                    <li>Design:</li>
                    <li class="cell small-8 medium-10  last"><?php echo $disclaimer ?></li>
                </ul>

                <section class="cell small-12 medium-9 large-10 grid-x
                    text-center align-center">

                    <h4 class="cell text-right">Design</h4>

                    <a aria-label="Go to top" class="cell top-link
                        text-right" href="#tabs"><i
                            class="fi-eject"></i></a>

                    <?php
                    $loop = new WP_Query(array('post_type' => 'designs', 'posts_per_page' => -1));

                    while ($loop->have_posts()) { $loop->the_post();

                    ?>
                    
                    <?php
                    $image = get_field('designs');
                    if (!empty($image)) : ?>
                        <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    <?php } ?> 

                </section>

            </div>

        </div>

        <div class="tabs-panel" id="panel4">

            <div class="grid-x align-right">

                <ul class="cell sticky-ul grid-x small-12 medium-3 large-2 text-left
                    vertical menu
                    align-top">
                    <li> <i class="cell text-left fi-thumbnails"></i></li>
                    <li>Poetry:
                        <ul class="nested vertical bullet menu">
                            <li><i class="fi-list"></i><a
                                    href="#poetry">Poems</a></li>
                            <li><i class="fi-list"></i><a
                                    href="#illustrated-poetry">Illustrated
                                    Poetry</a></li>
                        </ul>
                    </li>
                    <li class="cell small-8 medium-10  last"><?php echo $disclaimer ?></li>
                </ul>

                <div class="cell small-12 medium-9 large-10 grid-x
                    text-center align-center">

                    <section class="cell grid-x
                        text-center align-center">

                        <h4 id="poetry" class="cell text-right">Poems</h4>
                        <a aria-label="Go to top" class="cell top-link
                            text-right" href="#tabs"><i
                                class="fi-eject"></i></a>

                        <?php
                        $loop = new WP_Query(array('post_type' => 'poems_poetry', 'posts_per_page' => -1));

                        while ($loop->have_posts()) { $loop->the_post();

                        ?>
                        
                        <?php
                        $image = get_field('poems_poetry');
                        if (!empty($image)) : ?>
                            <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <?php } ?> 

                    </section>

                    <section class="cell grid-x
                        text-center align-center">

                        <h4 id="illustrated-poetry" class="cell
                            text-right">Illustrated
                            Poetry</h4>

                        <a aria-label="Go to top" class="cell top-link
                            text-right" href="#tabs"><i
                                class="fi-eject"></i></a>

                        <?php
                        $loop = new WP_Query(array('post_type' => 'illustrated_poetry', 'posts_per_page' => -1));

                        while ($loop->have_posts()) { $loop->the_post();

                        ?>
                        
                        <?php
                        $image = get_field('illustrated_poetry');
                        if (!empty($image)) : ?>
                            <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <?php } ?> 

                    </section>

                </div>

            </div>

        </div>

        <div class="tabs-panel" id="panel5">

            <div class="grid-x align-right">

                <ul class="cell sticky-ul grid-x small-12 medium-3 large-2 text-left
                    vertical menu
                    align-top">
                    <li> <i class="cell text-left fi-thumbnails"></i></li>
                    <li>Sculptures:</li>
                    <li class="cell small-8 medium-10  last"><?php echo $disclaimer ?></li>
                </ul>

                <section class="cell small-12 medium-9 large-10 grid-x
                    text-center align-center">

                    <h4 class="cell text-right">Sculptures</h4>

                    <a aria-label="Go to top" class="cell top-link
                        text-right" href="#tabs"><i
                            class="fi-eject"></i></a>

                        <?php
                        $loop = new WP_Query(array('post_type' => 'sculptures', 'posts_per_page' => -1));

                        while ($loop->have_posts()) { $loop->the_post();

                        ?>
                        
                        <?php
                        $image = get_field('sculptures');
                        if (!empty($image)) : ?>
                            <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <?php } ?> 

                </section>

            </div>

        </div>

        <div class="tabs-panel" id="panel6">

            <div class="grid-x align-right">

                <ul class="cell sticky-ul grid-x small-12 medium-3 large-2 text-left
                    vertical menu
                    align-top">
                    <li> <i class="cell text-left fi-thumbnails"></i></li>
                    <li>Illustrations:</li>
                    <li class="cell small-8 medium-10  last"><?php echo $disclaimer ?></li>
                </ul>

                <section class="cell small-12 medium-9 large-10 grid-x
                    text-center align-center">

                    <h4 class="cell text-right">Illustrations</h4>
                    <a aria-label="Go to top" class="cell
                        top-link
                        text-right" href="#tabs"><i
                            class="fi-eject"></i></a>

                        <?php
                        $loop = new WP_Query(array('post_type' => 'illustrations', 'posts_per_page' => -1));

                        while ($loop->have_posts()) { $loop->the_post();

                        ?>
                        
                        <?php
                        $image = get_field('illustrations');
                        if (!empty($image)) : ?>
                            <img class="gallery" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <?php } ?> 

                </section>

            </div>

        </div>

    </div>

</main>

<?php get_footer(); ?>