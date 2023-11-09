<?php get_header(); ?>

<main id="page-template">
  <section class="top">
	  <?php $image_top = get_field( 'image_haut_de_page' ); ?>
    <div class="top-image">
      <img src="<?= esc_url( $image_top['url'] ); ?>" alt="<?= esc_attr( $image_top['alt'] ); ?>" class="image">
      <img src="<?= get_template_directory_uri() ?>/public/oh.svg" alt="Logo Oh en blanc" class="logo-page">
    </div>
    <div class="top-content">
        <span class="point"></span>
        <div class="border-wrapper"></div>
      <?php the_field('texte_haut_de_page'); ?>
      <span class="point"></span>
    </div>
  </section>
  <section class="page-content">
    <div class="container-page">
      <?php the_content(); ?>
    </div>
  </section>
  <article>
    <div class="container-page">
      <div class="image-first-point">
        <?php $image_first_point = get_field('image_premier_point'); ?>
        <img src="<?= esc_url($image_first_point['url']); ?>" alt="<?= esc_attr($image_first_point['alt']); ?>">
      </div>
      <div class="content-first-point">
        <img src="<?= get_template_directory_uri() ?>/public/oh-blue.svg" alt="Logo Oh en bleu">
        <div class="separator"></div>
        <strong class="step">01 <span></span></strong>
        <div class="text-first-point"><?php the_field('texte_premier_point'); ?></div>
      </div>
    </div>
  </article>
</main>

<?php get_footer(); ?>
