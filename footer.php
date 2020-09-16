<footer>
        <div class="footer-container">
            <h1><?php the_field('footer-h1'); ?></h1>
            <ul class="footer-ul">
                <li>
                    <a href="<?php the_field('footer-fb'); ?>" target="_blank">
                        <i class="<?php the_field('footer-fb-icon'); ?>  fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('footer-tw'); ?>" target="_blank">
                        <i class="<?php the_field('footer-tw-icon'); ?>  fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('footer-ig'); ?>" target="_blank">
                        <i class="<?php the_field('footer-ig-icon'); ?> fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('footer-yt'); ?>" target="_blank">
                        <i class="<?php the_field('footer-yt-icon'); ?>  fa-xl white-text mr-md-5 mr-3 fa-2x"></i>
                    </a>
                </li>

            </ul>
        </div>
    </footer>
<?php wp_footer();?>
