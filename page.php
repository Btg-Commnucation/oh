<?php get_header(); ?>

<main id="page-template">
  <section class="top">
    <?php $image_top = get_field('image_haut_de_page'); ?>
    <div class="top-image">
      <img src="<?= esc_url($image_top['url']); ?>" alt="<?= esc_attr($image_top['alt']); ?>" class="image">
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
  <section class="second-point">
    <div class="left-second-point">
      <h2>
        <span>«  <br /></span>
        <?php the_field('titre_second_point'); ?>
      </h2>
      <div class="subTitle">
        <strong class="step">02 <span></span></strong>
        <?php the_field('sous_titre_second_point'); ?>
      </div>
      <div class="second-point-content">
        <?php the_field('texte_second_point'); ?>
      </div>
    </div>
    <div class="right-second-point">
      <?php $image_second = get_field('image_second_point'); ?>
      <img src="<?= esc_url($image_second['url']); ?>" alt="<?= esc_attr($image_second['alt']); ?>">
    </div>
  </section>
  <section class="third-point">
    <div class="container logo-line">
      <img src="<?= get_template_directory_uri() ?>/public/oh-blue.svg" alt="Logo Oh en bleu">
      <div class="line"></div>
    </div>
    <?php if (have_rows('image_troisieme_point')) : ?>
      <div class="galleries-page">
        <ul class="gallerie-img__container">
          <?php while (have_rows('image_troisieme_point')) : the_row();
            $image = get_sub_field('image'); ?>
            <li>
              <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>
    <div class="container">
      <div class="subTitle">
        <strong class="step">03 <span></span></strong>
        <h3><?php the_field('sous_titre_troisieme_point'); ?></h3>
      </div>
      <div class="third-point-content">
        <div><?php the_field('premier_texte_troisieme_point'); ?></div>
        <div><?php the_field('premier_texte_troisieme_point'); ?></div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>