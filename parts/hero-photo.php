<div class="header">
    <header>
        <section class="blue"></section>
        <section class="menu">
            <?php $link = get_field('instagram', 'option'); ?>
            <a href="<?= esc_url($link['url']); ?>" target="<?= esc_attr($link['target']); ?>" rel="noopener noreferrer">
                <span class="screen-reader-text">Se rendre sur notre instagram</span>
                <img class="rs-icon" src="<?= get_template_directory_uri() ?>/public/instagram.svg" alt="Logo d'instagramp" />
            </a>
            <button id="menuToggler" class="menu-container">
                <img class="menu-icon" src="<?= get_template_directory_uri() ?>/public/menu.svg" alt="Icon de menu" />
            </button>
        </section>
    </header>
    <section id="menu-container">
        <div class="menu-wrapper">
            <button id="close">
                <span class="screen-reader-text">Fermer le menu</span>
                <img src="<?= get_template_directory_uri() ?>/public/close.svg" alt="Croix blanche">
                <span class="underline"></span>
            </button>
            <?php if (have_rows('menu_principal', 'option')) : ?>
                <ul class="main-menu">
                    <?php while (have_rows('menu_principal', 'option')) : the_row(); ?>
                        <li>
                            <?php $lien = get_sub_field('lien'); ?>
                            <a href="<?= esc_url($lien['url']); ?>" target="<?= esc_attr($lien['target']); ?>"><?= esc_html($lien['title']); ?></a>
                        </li>
                        <li class="separator"></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <div class="logo-container">
                <a href="<?php echo home_url('/') ?>">
                    <span class="screen-reader-text">Retourner à l'accueil</span>
                    <img src="<?= get_template_directory_uri(); ?>/public/oh.svg" alt="Logo de l'entreprise Oh" class="logo">
                </a>
            </div>
        </div>
    </section>
</div>
<div class="content-hero-banner">
    <?php $img_top = get_field("image_haut_de_page"); ?>
    <img src="<?= esc_url($img_top['url']); ?>" alt="<?= esc_attr($img_top['alt']); ?>">
    <div class="title-container">
        <img src="<?= get_template_directory_uri(); ?>/public/oh.svg" alt="Logo Oh blanc" class="logo-page">
        <div>
            <span class="point"></span>
            <h1><?php the_title(); ?></h1>
            <span class="point"></span>
        </div>
    </div>
</div>