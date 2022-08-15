<?php
    $form_title = get_sub_field('title');
    $form_sub_title = get_sub_field('sub_title');
    $content_title = get_sub_field('content_title');
    $content_items = get_sub_field('repeater');
    $bg_img = get_sub_field('bg_img');
?>

<div class="get-touch" style="background-image: url(<?= $bg_img['url'] ?>)">
    <div class="container">
        <div class="get-touch__form">
            <h2 class="get-touch__form-title title title--bordered title--left"><?= $form_title ?></h2>
            <span class="get-touch__sub-title"><?= $form_sub_title ?></span>
            <?= do_shortcode('[contact-form-7 id="133" title="Связаться с нами"]') ?>
        </div>
        <div class="get-touch__content">
            <h3 class="get-touch__content-title"><?= $content_title ?></h3>
            <ul class="get-touch__content-list">
                <?php foreach($content_items as $item) : ?>
                    <li class="get-touch__content-item"><?= $item['txt'] ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
