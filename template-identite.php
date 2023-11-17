<?php
/*
Template Name: Identité
*/
get_header();
?>
<main id="identite">
    <section class="hero-banner">
        <div class="container-page">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>
    <?php $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
    ?>
        <section class="buttons-container">
            <div class="container-page">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <button id="<?= get_the_ID(); ?>" class="buttons"><?php the_title(); ?></button>
                <?php endwhile; ?>
            </div>
        </section>
        <article>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="article <?= get_the_ID() ?>">
                    <div class="container-page">
                        <h2 class="normal-style"><?php the_title(); ?></h2>
                    </div>
                    <?php the_content(); ?>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </article>
    <?php endif; ?>
</main>
<?php get_footer(); ?>