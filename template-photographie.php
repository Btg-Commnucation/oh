<?php
/*
Template Name: Photographie
*/
get_header();
?>

<div id="photographie">
    <section class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="section hero-banner splide__slide">
                    <?php get_template_part("./parts/hero-photo"); ?>
                </li>
                <li class="section gallerie_un splide__slide entry">
                    <div class="container">
                        <?php $img_une = get_field('image_1_gallerie_1'); ?>
                        <img src="<?= esc_url($img_une['url']); ?>" alt="<?= esc_attr($img_une['alt']); ?>" class="top-transition">
                        <div class="right">
                            <?php $img_deux = get_field('image_2_gallerie_1'); ?>
                            <img src="<?= esc_url($img_deux['url']) ?>" alt="<?= esc_attr($img_deux['alt']); ?>" class="right-transition delay-un">
                            <h2><?php the_field('titre_gallerie_1'); ?></h2>
                        </div>
                    </div>
                </li>
                <li class="section gallerie_deux splide__slide entry">
                    <h2><?php the_field('titre_gallerie_2'); ?></h2>
                    <div class="background">
                        <?php $img_un_gal_deux = get_field('image_1_gallerie_2'); ?>
                        <img src="<?= esc_url($img_un_gal_deux['url']); ?>" alt="<?= esc_attr($img_un_gal_deux['alt']); ?>" class="left-transition">
                    </div>
                    <?php $img_deux_gal_deux = get_field('image_2_gallerie_2'); ?>
                    <img src="<?= esc_url($img_deux_gal_deux['url']); ?>" alt="<?= esc_attr($img_deux_gal_deux['alt']); ?>" class="img-gallerie_deux right-transition">
                </li>
                <li class="section gallerie_trois splide__slide entry">
                    <?php $img_gal_3 = get_field('image_1_gallerie_3');
                    $img_2_gal_3 = get_field('image_2_gallerie_3');
                    ?>
                    <div class="img-container">
                        <img src="<?= esc_url($img_gal_3['url']); ?>" alt="<?= esc_attr($img_gal_3['alt']); ?>" class="left-transition">
                        <img src="<?= esc_url($img_2_gal_3['url']); ?>" alt="<?= esc_attr($img_2_gal_3['alt']); ?>" class="right-transition delay-un">
                    </div>
                    <div class="logo-line">
                        <img src="<?= get_template_directory_uri(); ?>/public/oh-blue.svg" alt="Logo Oh en bleu" class="no-animation">
                        <span class="line"></span>
                    </div>
                </li>
                <li class="section gallerie_quatre splide__slide entry">
                    <h2><?php the_field('titre_bas_de_page'); ?></h2>
                    <?php if (have_rows('images_bas_de_page')) :
                        while (have_rows('images_bas_de_page')) : the_row(); ?>
                            <?php $img_bas_de_page = get_sub_field('image'); ?>
                            <img src="<?= esc_url($img_bas_de_page['url']); ?>" alt="<?= esc_attr($img_bas_de_page['alt']); ?>" class="transition">
                    <?php endwhile;
                    endif; ?>
                </li>
            </ul>
        </div>
    </section>
</div>

<?php get_footer(); ?>