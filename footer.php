    
    <footer id="footer">

        <div class="container footer__container">

            <div class="footer">

                <img class="footer__logo" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' )); ?>" alt="DrightLights">

                <div class="footer__manager">

                    <div class="footer__manager--label">
                        <p>Artist Management:</p>
                        <p>EMAIL:</p>
                    </div>

                    <div class="footer__manager--link">
                        <a target="_blanck" href="<?php echo carbon_get_theme_option( 'manager_link' );?>"><?php echo carbon_get_theme_option( 'manager_name' );?></a>
                        <a target="_blanck" href="mailto:<?php echo carbon_get_theme_option( 'manager_email' );?>"><?php echo carbon_get_theme_option( 'manager_email' );?></a>
                    </div>

                </div>

                <nav class="footer__link">
                    <a class="footer__link--link" href="">
                        <span class="footer__link--img">
                            <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'img_link-itunes' ), 'full'); ?>" alt="itunes">
                        </span>
                    </a>
                    <a class="footer__link--link" href="">
                        <span class="footer__link--img">
                            <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'img_link-spotify' ), 'full'); ?>" alt="spotify">
                        </span>
                    </a>
                    <a class="footer__link--link" href="">
                        <span class="footer__link--img">
                            <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'img_link-instagram' ), 'full'); ?>" alt="instagram">
                        </span>
                    </a>
                    <a class="footer__link--link" href="">
                        <span class="footer__link--img">
                            <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'img_link-youtube' ), 'full'); ?>" alt="youtube">
                        </span>
                    </a>
                    <a class="footer__link--link" href="">
                        <span class="footer__link--img">
                            <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'img_link-twitter' ), 'full'); ?>" alt="twitter">
                        </span>
                    </a>
                    <a class="footer__link--link" href="">
                        <span class="footer__link--img">
                            <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'img_link-facebook' ), 'full'); ?>" alt="facebook">
                        </span>
                    </a>
                </nav>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>

</html>