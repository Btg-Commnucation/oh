<?php
/*
Template Name: Photographie
*/
?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <main id="photographie">
        <section class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="section hero-banner splide__slide">
                        <?php get_template_part("./parts/hero-photo"); ?>
                    </li>
                    <li class="section gallerie_un splide__slide">
                        <div class="container">
                            <?php $img_une = get_field('image_1_gallerie_1'); ?>
                            <img src="<?= esc_url($img_une['url']); ?>" alt="<?= esc_attr($img_une['alt']); ?>">
                            <div class="right">
                                <?php $img_deux = get_field('image_2_gallerie_1'); ?>
                                <img src="<?= esc_url($img_deux['url']) ?>" alt="<?= esc_attr($img_deux['alt']); ?>">
                                <h2><?php the_field('titre_gallerie_1'); ?></h2>
                            </div>
                        </div>
                    </li>
                    <li class="section gallerie_deux splide__slide">
                        <h2><?php the_field('titre_gallerie_2'); ?></h2>
                        <div class="background">
                            <?php $img_un_gal_deux = get_field('image_1_gallerie_2'); ?>
                            <img src="<?= esc_url($img_un_gal_deux['url']); ?>" alt="<?= esc_attr($img_un_gal_deux['alt']); ?>">
                        </div>
                        <?php $img_deux_gal_deux = get_field('image_2_gallerie_2'); ?>
                        <img src="<?= esc_url($img_deux_gal_deux['url']); ?>" alt="<?= esc_attr($img_deux_gal_deux['alt']); ?>">
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>