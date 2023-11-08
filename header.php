<!doctype html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
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
        <img src="<?= get_template_directory_uri(); ?>/public/oh.svg" alt="Logo de l'entreprise Oh" class="logo">
      </div>
    </div>
  </section>