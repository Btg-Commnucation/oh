<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main id="front-page">
  <img src="<?= get_template_directory_uri(); ?>/public/oh.svg" alt="Logo de Oh en blanc">

	<?php if ( have_rows( 'menu_principal', 'option' ) ) : ?>
      <nav id="front-menu">
        <ul>
			    <?php while ( have_rows( 'menu_principal', 'option' ) ) :
				  the_row();
				  $link = get_sub_field( 'lien' );
				    if ( $link['title'] !== "Contact" ) : ?>
              <li>
                <a href="<?= esc_url( $link['url'] ); ?>" target="<?= esc_attr( $link['target'] ); ?>">
                    <?= esc_html( $link['title'] ); ?>
                </a>
              </li>
              <li class="separator"></li>
				    <?php endif ?>
			    <?php endwhile; ?>
        </ul>
      </nav>
	<?php endif; ?>
</main>
<?php wp_footer(); ?>
<footer class="footer-front">
	<?php
		$link_contact = get_field( 'nous_contacter', 'option' ); ?>
  <section class="white-footer">
    <p>Réalisation : <a href="https://btg-communication.fr" rel="noopener noreferrer" target="_blank">
        btg communication
      </a></p>
    <ul class="links">
      <li>
		  <?php
			  $link_mention = get_field( 'mention_legales', 'option' ); ?>
        <a href="<?= esc_url( $link_mention['url'] ); ?>" target="<?= esc_attr( $link_mention['target'] ) ?>">
			    <?= esc_html( $link_mention['title'] ); ?>
        </a>
      </li>
      <li class="separator"></li>
      <li>
        <a href="<?= esc_url( $link_contact['url'] ); ?>" target="<?= esc_attr( $link_contact['target'] ) ?>">
			    <?= esc_html( $link_contact['title'] ); ?>
        </a>
      </li>
    </ul>
  </section>
</footer>

</body>

</html>
