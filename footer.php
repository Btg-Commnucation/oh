<footer>
    <?php $link_contact = get_field('page_contact', 'option'); ?>
    <img src="<?= get_template_directory_uri() ?>/public/oh-blue.svg" alt="Oh logo en bleu" class="logo-footer">
    <section class="blue-footer">
        <div class="left">
            <?php the_field('texte_gauche', 'option'); ?>
        </div>
        <div class="middle">
            <?php the_field('adresse', 'option'); ?>
        </div>
        <div class="right">
            <a href="<?= esc_url($link_contact['url']); ?>" target="<?= esc_attr($link_contact['target']) ?>">
                <?= esc_html($link_contact['title']); ?>
            </a>
        </div>
    </section>
    <section class="white-footer">
        <p>Réalisation: <a href="https://btg-communication.fr" rel="noopener noreferrer" target="_blank">btg communication</a></p>
        <ul class="links">
            <li>
                <?php $link_mention = get_field('page_mention_legales', 'option'); ?>
                <a href="<?= esc_url($link_mention['url']); ?>" target="<?= esc_attr($link_mention['target']) ?>">
                    <?= esc_html($link_mention['title']); ?>
                </a>
            </li>
            <li class="separator"></li>
            <li>
                <a href="<?= esc_url($link_contact['url']); ?>" target="<?= esc_attr($link_contact['target']) ?>">
                    <?= esc_html($link_contact['title']); ?>
                </a>
            </li>
        </ul>
    </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>