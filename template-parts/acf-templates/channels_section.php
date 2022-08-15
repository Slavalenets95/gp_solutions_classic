<?php
    $title = get_sub_field('title');
    $sub_title = get_sub_field('sub_title');
    $icon_block_title = get_sub_field('icon_block_title');
    $icon_items = get_sub_field('icon_repeater');
    $icon_footer = get_sub_field('footer_txt');
    $icon_block_bg = get_sub_field('bg_img');
    $icon_block_footer_txt = get_sub_field('footer_txt');
    $img_block_title = get_sub_field('img_block_title');
    $img_items = get_sub_field('img_repeater');
    $img_footer_link = get_sub_field('img_block_footer_link');
?>

<div class="channels wow bounceInUp" data-wow-offset="250">
    <div class="channels-header">
        <div class="container">
            <h2 class="channels-header__title title title--bordered center"><?= $title ?></h2>
            <p class="channels-header__sub-title center"><?= $sub_title ?></p>
        </div>
    </div>

    <div class="channels-body">
       <div class="container">
           <div class="channels-body__icons" style="background-image: url(<?= $icon_block_bg['url'] ?>);">
           <h3 class="channels-body__title center"><?= $icon_block_title ?></h3>
           <div class="channels-body__icons-items">
               <?php foreach($icon_items as $item) : ?>
                   <div class="channels-body__icons-item">
                       <div class="channels-body__icons-square">
                           <img src="<?= $item['icon']['url'] ?>"
                                alt="<?= get_img_alt($item['icon']) ?>"
                                loading="lazy"
                           >
                       </div>
                       <span class="channels-body__icons-txt"><?= $item['icon_txt'] ?></span>
                   </div>
               <?php endforeach ?>
           </div>
           <span class="channels-body__icons-footer-txt center"><?= $icon_block_footer_txt ?></span>
       </div>
        <div class="channels-body__imgs">
            <h3 class="channels-body__title center"><?= $img_block_title ?></h3>
            <div class="channels-body__imgs-items">
                <?php foreach($img_items as $item) : ?>
                    <div class="channels-body__imgs-item">
                        <img src="<?= $item['img']['url'] ?>"
                             alt="<?= get_img_alt($item['img']) ?>"
                             loading="lazy"
                        >
                    </div>
                <?php endforeach ?>
            </div>
            <div class="channels-body__imgs-footer">
                <a href="<?= $img_footer_link['url'] ?>" class="channels-body__imgs-link btn btn--darked">
                    <?= $img_footer_link['title'] ?>
                </a>
            </div>
        </div>
       </div>
    </div>
</div>
