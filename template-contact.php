<?php
	/*
	 * Template Name: Contact
	 */
	get_header();
?>

<main id="contact-page">
  <div class="container">
    <img src="<?= get_template_directory_uri() ?>/public/oh-blue.svg" alt="Logo Oh de couleur bleu" class="logo">
    <section class="title-container">
      <span class="point"></span>
      <h1><?php the_title(); ?></h1>
      <span class="point"></span>
		<?php the_content(); ?>
    </section>
  </div>
  <article>
    <div class="container">
      <h2 class="contact-form-title">Nous contacter</h2>
		  <?php echo do_shortcode( '[contact-form-7 id="82cca74" title="Formulaire de contact 1"]' ) ?>
      <div class="response">
        <span class="point"></span>
        <strong>Merci, <br />nous vous recontacterons dans les meilleurs délais</strong>
        <span class="point"></span>
      </div>
    </div>
  </article>
  <section class="img-contact">
    <img src="<?php echo get_template_directory_uri() ?>/public/voilier-contact.jpg" alt="Image d'un voilier voguant
    avec ton équipage">
  </section>
  <section class="logo-contact">
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/public/oh-blue.svg" alt="Logo de Oh bleu">
      <span class="line"></span>
    </div>
  </section>
</main>

<?php get_footer(); ?>
