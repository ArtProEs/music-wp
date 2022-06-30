<?php /* Template Name: Home */?>

<?php  get_header();?>
    <section>

        <div class="container">

            <div class="offer">

                <div class="offer__text">
                    <h1 class="element-anim"><?php echo carbon_get_post_meta( get_the_ID(), 'top_title' ); ?></h1>
                    <p>War For Love</p>
                </div>
                <div class="offer__audio">

                    <img class="offer__audio--controls" 
                        data-imgsrc-play="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_player-play' ), 'full'); ?>" 
                        data-imgsrc-paus="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_player-paus' ), 'full'); ?>" 
                        src="" alt="play"
                    >

                    <div class="offer__audio--progres_bar">
                        <div class="offer__audio--progres"></div>
                    </div>
                    <div class="offer__audio--duration">00:00-00:00</div>
                </div>

            </div>
        </div>

    </section>

    <section>

        <div class="container news__container">
            <?php
                $news_items = carbon_get_post_meta( get_the_ID(), 'news_items' );
                foreach($news_items as $item) : 
                $news_img_src = wp_get_attachment_image_url($item['item_img'], 'full') ;
                $text = $item['item_text'];
            ?>
                <div class="news element-anim">
                    <img class="news__img" src="<?php echo $news_img_src;?>" alt="news">
                    <div class="news__text"><?php echo $text ;?></div>
                </div>
            <?php endforeach;?>
        </div>

    </section>

<!-- light -->

    <section id="light">

        <div class="container light__container">

            <div class="light element-anim">

                <div class="light__title">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_title_img' ), 'full'); ?>" alt="soundEfect" class="light__title--img">
                    <h2 class="light__title--title element-anim"><?php echo carbon_get_post_meta( get_the_ID(), 'adout_title' );?></h2>
                </div>

                <div class="light__text ">
                    <p class="light__text--p1 p "><?php echo carbon_get_post_meta( get_the_ID(), 'adout_text' );?></p>
                </div>

                <ul class="light__link">
                    <li><div></div><?php echo carbon_get_post_meta( get_the_ID(), 'adout_performance1' );?></li>
                    <li><div></div><?php echo carbon_get_post_meta( get_the_ID(), 'adout_performance2' );?></li>
                    <li><div></div><?php echo carbon_get_post_meta( get_the_ID(), 'adout_performance3' );?></li>
                    <li><div></div><?php echo carbon_get_post_meta( get_the_ID(), 'adout_performance4' );?></li>
                </ul>

            </div>

            <img class="light__img element-anim" src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'adout_img' ), 'full'); ?>" alt="Bright Lights">

        </div>

    </section>
<!--/.light -->

<!-- quote -->
    <section id="quote">

        <div class="container quote__container">

            <div class="quote element-anim">
                <p><?php echo carbon_get_post_meta( get_the_ID(), 'quote_text' );?></p>
                <hr>
                <a href="" target="_blanck">PopULove.net</a>
                <img class="quote__img element-anim" src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'quote_img' ), 'full'); ?>" alt="">
            </div>

        </div>

    </section>
<!--/.quote -->

<!-- last-tracks -->
    <section id="last-tracks">

        <div class="container last-tracks__container">

            <div class="last-tracks__border element-anim">
                <img class="element-anim" src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'tracks_img' ), 'full'); ?>" alt="">
            </div>

            <div class="last-tracks">

                <div class="light__title">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_title_img' ), 'full'); ?>" alt="soundEfect" class="light__title--img">
                    <h2 class="light__title--title element-anim"><?php echo carbon_get_post_meta( get_the_ID(), 'tracks_title' );?></h2>
                </div>

                <div class="last-tracks__audio">

                    <img class="last-tracks__audio--controls" 
                        data-imgsrc-play="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_player-play' ), 'full'); ?>" 
                        data-imgsrc-paus="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_player-paus' ), 'full'); ?>" 
                        src="" alt="play"
                    >

                    <div class="last-tracks__audio--progres_bar">
                        <div class="last-tracks__audio--progres"></div>
                    </div>

                    <div class="last-tracks__audio--duration"><!-- --></div>

                </div>

                <div class="last-tracks__track-list">
                    <!-- tracks -->
                </div>
                    
                <ul class="last-tracks__follow">
                    <p>Follow me:</p>
                    <li><a href="" target="_blanck"><img class="last-tracks__follow--img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'img_link-spotify' ), 'full'); ?>" alt="Spotify">Spotify</a></li>
                    <li><a href="" target="_blanck"><img class="last-tracks__follow--img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'img_link-itunes' ), 'full'); ?>" alt="iTunes">iTunes</a></li>
                </ul>

            </div>

        </div>

    </section>
<!--/.last-tracks -->

<!-- gallery -->
    <section id="gallery">

        <div class="container gallery__container">

            <div class="gallery">
                <img class="gallery__grid1 element-anim" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'gallery-grid1' ), 'full'); ?>" alt="">
                <img class="gallery__grid2 element-anim" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'gallery-grid2' ), 'full'); ?>" alt="">
                <img class="gallery__grid3 element-anim" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'gallery-grid3' ), 'full'); ?>" alt="">
                <img class="gallery__grid4 element-anim" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'gallery-grid4' ), 'full'); ?>" alt="">
                <img class="gallery__grid5 element-anim" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'gallery-grid5' ), 'full'); ?>" alt="">
            </div>

        </div>

    </section>
<!--/.gallery -->

<!-- slider -->
    <section id="slider">
        <div class="container slider__container">
            <div class="slider">
                <?php
                    $concerts = carbon_get_post_meta( get_the_ID(), 'concerts' ); // ↓ получаем продукты выведенные в Home
                    $concerts_id  = wp_list_pluck( $concerts, 'id'); // ↓ отбираем ID
                    // ↓ получаем посты из базы данных по фильтру 
                    
                    $concerts_posts = get_posts([
                        'post_type' => 'concerts', //→ только те поссты у которых тип продукт 
                        'include' => $concerts_id, //→ и имеют ID выведенные в Home 
                    ]);
                    
                    if ($concerts_posts) : ?>
                        <div class="slider__trecker">
                            <?php foreach($concerts_posts as $post) : setup_postdata( $post ); ?>
                                <div class="slide">
                                    <div class="event">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="The Park at Wild Horse Pass" class="event__img">
                                        <div class="event__text">
                                            <div class="event__location"><?php the_title(); ?></div>
                                            <div class="event__name"><?php the_excerpt(); ?></div>
                                            <div class="event__footer">
                                                <div class="event__footer--date"><?php echo  carbon_get_post_meta( get_the_ID(), 'concert_date' );?></div>
                                                <a class="event__footer--btn">tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div><!-- /.slider__trecker -->
                    <?php endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="slider__btn">
            <div class="slider__btn--prev">←</div>
            <div class="slider__btn--next">→</div>
        </div>
    </section>
<!-- /.slider -->

<?php  get_footer();?>