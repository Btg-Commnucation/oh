<div class="content-hero-banner">
    <?php $img_top = get_field("image_haut_de_page"); ?>
    <img src="<?= esc_url($img_top['url']); ?>" alt="<?= esc_attr($img_top['alt']); ?>">
    <div class=" title-container">
        <img src="<?= get_template_directory_uri(); ?>/public/oh.svg" alt="Logo Oh blanc" class="logo-page">
        <div>
            <span class="point"></span>
            <h1><?php the_title(); ?></h1>
            <span class="point"></span>
        </div>
    </div>
</div>