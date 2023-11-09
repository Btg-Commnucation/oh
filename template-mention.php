<?php
/*
Template Name: mention
*/
get_header();
?>

<main id="mention">
    <div class="container">
        <a href="<?= home_url('/') ?>">
            <span class="screen-reader-text">Retourne à l'accueil</span>
            <img src="<?= get_template_directory_uri() ?>/public/oh-blue.svg" alt="Logo Oh bleu" class="logo">
        </a>
        <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    </div>
</main>

<?php get_footer(); ?>