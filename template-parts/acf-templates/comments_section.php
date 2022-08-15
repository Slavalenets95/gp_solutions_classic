<?php
    $title = get_sub_field('title');
    $items = get_sub_field('repeater');
?>

<div class="comments wow bounceInLeft" data-wow-offset="250">
    <div class="container">
        <div class="comments-header">
            <?php if($title) : ?>
                <h2 class="comments__title title title--bordered center"><?= $title ?></h2>
            <?php endif ?>
        </div>
        <div class="comments-body">
            <?php if ($items) : ?>
                <div class="comments-slider custom-dots custom-dots--gray">
                    <?php foreach($items as $item) : ?>
                        <div class="comments-item">
                            <div class="comments-item__header">
                                <div class="comments-item__avatar-wrapper">
                                    <img src="<?= $item['avatar']['url'] ?>"
                                         alt="<?= get_img_alt($item['avatar']) ?>"
                                         class="comments-item__avatar-img">
                                </div>
                                <div class="comments-item__info-wrapper">
                                    <h3 class="comments-item__name"><?= $item['name'] ?></h3>
                                    <span class="comments-item__position"><?= $item['position'] ?></span>
                                </div>
                            </div>
                            <div class="comments-item__body sd">
                                <?= $item['content'] ?>
                            </div>

                            <img src="<?= $item['bg_img']['url'] ?>"
                                 alt="<?= get_img_alt($item['bg_img']) ?>"
                                 class="comments-item__bg-img">
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
