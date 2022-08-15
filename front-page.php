<?php get_header() ?>

<main class="main">
    <?php if (have_rows('constructor')) : ?>
        <?php while (have_rows('constructor')) {
            the_row();
            $template_name = get_row_layout();
            get_template_part(get_acf_template_path() . $template_name);
        }
        ?>
    <?php endif ?>
</main>

<?php get_footer() ?>
