<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gp_solutions
 */

?>

<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-logo">
                <a href="<?= get_home_url() ?>" class="footer-logo__link">
                    <svg width="75" height="21" viewBox="0 0 75 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.706665 20V0.363681H4.8583V16.5771H13.2766V20H0.706665Z" fill="white"/>
                        <path d="M33.3061 10.1819C33.3061 12.3232 32.9002 14.1449 32.0884 15.6471C31.283 17.1492 30.1836 18.2966 28.7901 19.0892C27.403 19.8754 25.8434 20.2685 24.1111 20.2685C22.3661 20.2685 20.8001 19.8722 19.413 19.0796C18.0259 18.287 16.9297 17.1396 16.1243 15.6375C15.3189 14.1353 14.9162 12.3168 14.9162 10.1819C14.9162 8.04053 15.3189 6.2188 16.1243 4.71666C16.9297 3.21453 18.0259 2.07036 19.413 1.28414C20.8001 0.491522 22.3661 0.0952148 24.1111 0.0952148C25.8434 0.0952148 27.403 0.491522 28.7901 1.28414C30.1836 2.07036 31.283 3.21453 32.0884 4.71666C32.9002 6.2188 33.3061 8.04053 33.3061 10.1819ZM29.0969 10.1819C29.0969 8.79479 28.8892 7.62504 28.4737 6.67263C28.0646 5.72022 27.4861 4.99791 26.7383 4.50573C25.9904 4.01354 25.1147 3.76745 24.1111 3.76745C23.1076 3.76745 22.2319 4.01354 21.484 4.50573C20.7361 4.99791 20.1545 5.72022 19.739 6.67263C19.3299 7.62504 19.1253 8.79479 19.1253 10.1819C19.1253 11.5689 19.3299 12.7387 19.739 13.6911C20.1545 14.6435 20.7361 15.3658 21.484 15.858C22.2319 16.3502 23.1076 16.5963 24.1111 16.5963C25.1147 16.5963 25.9904 16.3502 26.7383 15.858C27.4861 15.3658 28.0646 14.6435 28.4737 13.6911C28.8892 12.7387 29.0969 11.5689 29.0969 10.1819Z"
                              fill="white"/>
                        <path d="M49.4021 6.71098C49.2678 6.24436 49.0793 5.83208 48.8364 5.47412C48.5935 5.10978 48.2962 4.80296 47.9447 4.55367C47.5995 4.29799 47.2032 4.10303 46.7558 3.9688C46.3147 3.83456 45.8257 3.76745 45.2888 3.76745C44.2852 3.76745 43.4031 4.01674 42.6425 4.51531C41.8882 5.01389 41.3001 5.73939 40.8783 6.69181C40.4564 7.63783 40.2455 8.79479 40.2455 10.1627C40.2455 11.5306 40.4532 12.6939 40.8687 13.6527C41.2842 14.6116 41.8722 15.3434 42.6329 15.8484C43.3935 16.347 44.2916 16.5963 45.3271 16.5963C46.2668 16.5963 47.069 16.4301 47.7337 16.0977C48.4049 15.7589 48.9163 15.2827 49.2678 14.6691C49.6258 14.0554 49.8048 13.3299 49.8048 12.4926L50.6485 12.6172H45.586V9.49152H53.803V11.9652C53.803 13.6911 53.4386 15.1741 52.7099 16.4141C51.9813 17.6478 50.9777 18.6002 49.6993 19.2714C48.4209 19.9361 46.9571 20.2685 45.308 20.2685C43.4671 20.2685 41.8499 19.8626 40.4564 19.0508C39.0629 18.2326 37.9763 17.0725 37.1965 15.5704C36.423 14.0618 36.0363 12.2721 36.0363 10.201C36.0363 8.60942 36.2664 7.19039 36.7266 5.94394C37.1933 4.6911 37.8452 3.63002 38.6826 2.7607C39.52 1.89138 40.4948 1.2298 41.607 0.775968C42.7192 0.322132 43.9241 0.0952148 45.2217 0.0952148C46.3339 0.0952148 47.3694 0.258212 48.3282 0.584207C49.287 0.903809 50.1371 1.35764 50.8786 1.94571C51.6265 2.53378 52.2369 3.23371 52.7099 4.0455C53.183 4.8509 53.4866 5.73939 53.6208 6.71098H49.4021Z"
                              fill="white"/>
                        <path d="M74.9663 10.1819C74.9663 12.3232 74.5604 14.1449 73.7486 15.6471C72.9432 17.1492 71.8437 18.2966 70.4503 19.0892C69.0632 19.8754 67.5035 20.2685 65.7713 20.2685C64.0263 20.2685 62.4602 19.8722 61.0731 19.0796C59.6861 18.287 58.5898 17.1396 57.7844 15.6375C56.979 14.1353 56.5763 12.3168 56.5763 10.1819C56.5763 8.04053 56.979 6.2188 57.7844 4.71666C58.5898 3.21453 59.6861 2.07036 61.0731 1.28414C62.4602 0.491522 64.0263 0.0952148 65.7713 0.0952148C67.5035 0.0952148 69.0632 0.491522 70.4503 1.28414C71.8437 2.07036 72.9432 3.21453 73.7486 4.71666C74.5604 6.2188 74.9663 8.04053 74.9663 10.1819ZM70.7571 10.1819C70.7571 8.79479 70.5494 7.62504 70.1339 6.67263C69.7248 5.72022 69.1463 4.99791 68.3984 4.50573C67.6506 4.01354 66.7748 3.76745 65.7713 3.76745C64.7678 3.76745 63.892 4.01354 63.1442 4.50573C62.3963 4.99791 61.8146 5.72022 61.3991 6.67263C60.99 7.62504 60.7855 8.79479 60.7855 10.1819C60.7855 11.5689 60.99 12.7387 61.3991 13.6911C61.8146 14.6435 62.3963 15.3658 63.1442 15.858C63.892 16.3502 64.7678 16.5963 65.7713 16.5963C66.7748 16.5963 67.6506 16.3502 68.3984 15.858C69.1463 15.3658 69.7248 14.6435 70.1339 13.6911C70.5494 12.7387 70.7571 11.5689 70.7571 10.1819Z"
                              fill="white"/>
                    </svg>
                </a>
            </div>
            <a href="#" class="footer__contact-us btn">Contact Us</a>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <nav class="footer-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'menu' => 'Footer Menu',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'footer-nav__menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                ]);
                ?>
            </nav>
            <?php
            $linkedin = get_field('linkedin', 'options');
            $twitter = get_field('twitter', 'options');
            $facebook = get_field('facebook', 'options');
            ?>
            <?php if($linkedin || $twitter || $facebook) : ?>
                <ul class="footer-social">
                    <?php if($linkedin) : ?>
                        <li class="footer-social__item">
                            <a href="<?= $linkedin['url'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($twitter) : ?>
                        <li class="footer-social__item footer-social__item-twitter">
                            <a href="<?= $twitter['url'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if($facebook) : ?>
                        <li class="footer-social__item footer-social__item-facebook">
                            <a href="<?= $facebook['url'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            <?php endif ?>
        </div>
    </div>
</footer><!-- #colophon -->
<div class="overlay"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
