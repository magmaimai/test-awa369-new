<?php
/**
 * Welcome Visualmodo backend Page.
 */
?>

<?php $product = wp_get_theme()->get( 'Name' ); ?>

<div class="wrap">

    <div class="visualmodo-heading mb-5">
        <h1 class="visualmodo-heading-welcome"><?php echo sprintf( __( 'Welcome to ', 'vslmd' ) . VSLMD_NAME ).'! '.'&#127881;' ?></h1>
        <div class="visualmodo-heading-social-media">
            <a href="https://facebook.com/visualmodo/" target="_blank"><span class="dashicons dashicons-facebook-alt"></span></a>
            <a href="https://twitter.com/visualmodo/" target="_blank"><span class="dashicons dashicons-twitter"></span></a>
            <a href="https://instagram.com/visualmodo/" target="_blank"><span class="dashicons dashicons-instagram"></span></a>
            <a href="https://youtube.com/visualmodo/" target="_blank"><span class="dashicons dashicons-youtube"></span></a>
            <a href="https://www.visualmodo.com/blog/" target="_blank"><span class="dashicons dashicons-rss"></span></a>
        </div>
    </div>

    <div class="visualmodo-quick-start-guide">

        <h2><?php echo __( 'Your Quick Start Guide', 'vslmd' ); ?></h2>
        <div class="visualmodo-quick-start-guide__items">

            <div class="visualmodo-quick-start-guide__item">
                <div class="visualmodo-quick-start-guide__item-left">
                    <div class="visualmodo-quick-start-guide__item-sequence">
                        <span>1</span>
                    </div>
                    <div class="visualmodo-quick-start-guide__item-content">
                        <h3><?php echo __( 'Essential Plugins', 'vslmd' ); ?></h3>
                        <span><?php echo __( 'Install and active your Plugins', 'vslmd' ); ?></span>
                    </div>
                </div>
                <div class="visualmodo-quick-start-guide__item-right">
                    <div class="visualmodo-quick-start-guide__item-link">
                        <a href="admin.php?page=vslmd-install-plugins" class="button button-primary button-hero"><?php echo __( 'Install And Active Plugins', 'vslmd' ); ?></a>
                    </div>
                </div>
            </div>

            <div class="visualmodo-quick-start-guide__item">
                <div class="visualmodo-quick-start-guide__item-left">
                    <div class="visualmodo-quick-start-guide__item-sequence">
                        <span>2</span>
                    </div>
                    <?php if( $product == 'Aesir' ) { ?>
                        <div class="visualmodo-quick-start-guide__item-content">
                            <h3><?php echo __( 'Prebuilt Websites', 'vslmd' ); ?></h3>
                            <span><?php echo __( 'Aesir gives you a full library of beautiful full page layouts.', 'vslmd' ); ?></span>
                        </div>
                    <?php } else { ?>
                        <div class="visualmodo-quick-start-guide__item-content">
                            <h3><?php echo __( 'Demo Import', 'vslmd' ); ?></h3>
                            <span><?php echo __( VSLMD_NAME.' gives you a content demo of beautiful full page layouts.', 'vslmd' ); ?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="visualmodo-quick-start-guide__item-right">
                    <div class="visualmodo-quick-start-guide__item-link">
                        <a href="admin.php?page=templates-library" class="button button-primary button-hero"><?php if( $product == 'Aesir' ) { echo __( 'Access Full Library', 'vslmd' ); } else { echo __( 'Access Demo Import', 'vslmd' ); } ?></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="visualmodo-quick-start-guide__system-requirements mt-5">

            <?php
            $php_version = phpversion();
            $memory_limit = (int)size_format( wp_convert_hr_to_bytes( ini_get( 'memory_limit' ) ) );
            $max_upload_size = (int)size_format( wp_max_upload_size() );
            $post_max_size = (int)size_format( wp_convert_hr_to_bytes( ini_get( 'post_max_size' ) ) );
            $icon_pass = '<span class="dashicons dashicons-yes-alt"></span>';
            $icon_warning = '<span class="dashicons dashicons-warning"></span>';
            $php_version__status = $php_version >= '7.4' ? $icon_pass : $icon_warning;
            $memory_limit__status = $memory_limit >= '128' ? $icon_pass : $icon_warning;
            $max_upload_size__status = $max_upload_size >= '128' ? $icon_pass : $icon_warning;
            $post_max_size__status = $post_max_size >= '128' ? $icon_pass : $icon_warning;
            ?>

            <div class="visualmodo-quick-start-guide__system-requirements-status">

                <h2><?php echo __( 'System Requirements', 'vslmd' ); ?></h2>

                <div class="php-version">
                    <?php echo $php_version__status; ?>
                    <span>Version 7.4 or greater</span>
                </div>
                
                <div class="memory-limit">
                    <?php echo $memory_limit__status; ?>
                    <span>Memory Limit (128M)</span>
                </div>
                
                <div class="upload-max-filesize">
                    <?php echo $max_upload_size__status; ?>
                    <span>Upload Max. Filesize (128M)</span>
                </div>

                <div class="post-max-size">
                    <?php echo $post_max_size__status; ?>
                    <span>Max. Post Size (128M)</span>
                </div>

                <div class="visualmodo-quick-start-guide__system-requirements-info mt-5">
                    <h2><?php echo __( 'Best Web Hosting', 'vslmd' ); ?></h2>
                    <div class="visualmodo-quick-start-guide__system-requirements-hosts">
                        <a href="https://bluehost.sjv.io/EaMeRe" target="_blank">
                            <img src="https://cdn.visualmodo.com/aesir/assets/img/bluehost.svg" alt="BlueHost">
                        </a>
                        <a href="https://www.cloudways.com/en/?id=309377&a_bid=248d574c" target="_blank">
                            <img src="https://cdn.visualmodo.com/aesir/assets/img/cloudways.svg" alt="Cloudways">
                        </a>
                    </div>
                </div>
            
            </div>

            <div class="visualmodo-quick-start-guide__system-requirements-info">
                <p>Here are the system requirements you need in order to use <?php echo VSLMD_NAME; ?>. (If you are not sure whether or not your server supports this, contact your <strong>host</strong>). Note: These requirements are for <?php echo VSLMD_NAME; ?>. If you are using additional plugins on your site that also have minimum requirements such as WooCommerce, you may need to increase your memory to 512 MB to help avoid loading issues.</p>
            </div>

        </div>

        <h2 class="mt-5"><?php echo __( 'Still in doubt?', 'vslmd' ); ?></h2>

        <div class="visualmodo-quick-start-guide-still-in-doubt">

            <div class="visualmodo-quick-start-guide-still-in-doubt__content">
                <p>When starting your website, you can choose two paths, create a <strong>Blank Website</strong> or with a <strong>Prebuilt Website</strong>. If you choose the second option, follow the two steps above. First, install all the essential plugins to get all the necessary functions to proceed, then select a Prebuilt Website that you like best to import to make your site looks like this prebuilt website, and you can customize it from there, and you're ready to go! You can also watch the <strong>Quick Start Guide</strong> video. &#128522;</p>
            </div>

            <div class="video-container">
                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/zDyQsXi7ka8"></iframe>
            </div>

        </div>

    </div>

    <div class="visualmodo-news mt-5">

        <?php
            include_once(ABSPATH . WPINC . '/feed.php');
            if( function_exists('fetch_feed') ) {
                $feed = fetch_feed('https://www.visualmodo.com/feed/');
                if (!is_wp_error($feed)) : $feed->init();
                    $feed->set_output_encoding('UTF-8');    // set encoding
                    $feed->handle_content_type();       // ensure encoding
                    $feed->set_cache_duration(21600);   // six hours in seconds
                    $limit = $feed->get_item_quantity(20);  // get 10 feed items
                    $items = $feed->get_items(0, $limit);   // set array
                endif;
            }
        ?>

        <div class="visualmodo-feed">
            <h2><?php echo __( 'Visualmodo Blog', 'vslmd' ); ?></h2>

            <?php if ($limit == 0) { 
                echo '<p>'. __( 'RSS Feed currently unavailable.', 'vslmd' ) .'</p>'; 
            } else { ?>

                <div class="visualmodo-feed__inner">

                    <div class="visualmodo-feed__col-1">
                        <?php
                        $blocks = array_slice($items, 0, 5);
                        foreach ($blocks as $block) { ?>
                            <div class="feed-item">
                                <h3><a href="<?php echo $block->get_permalink(); ?>"><?php echo $block->get_title(); ?></a></h3>
                                <p>
                                    <?php echo substr($block->get_description(), 0, 200); ?> 
                                    <a href="<?php echo $block->get_permalink(); ?>"><?php echo __( 'Continue reading', 'vslmd' ); ?></a>
                                </p>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="visualmodo-feed__col-2">
                        <?php
                        $blocks = array_slice($items, 5, 5);
                        foreach ($blocks as $block) { ?>
                            <div class="feed-item">
                                <h3><a href="<?php echo $block->get_permalink(); ?>"><?php echo $block->get_title(); ?></a></h3>
                                <p>
                                    <?php echo substr($block->get_description(), 0, 200); ?> 
                                    <a href="<?php echo $block->get_permalink(); ?>"><?php echo __( 'Continue reading', 'vslmd' ); ?></a>
                                </p>
                            </div>
                        <?php } ?>
                    </div>

                </div>

            <?php } ?>
            
        </div>
    </div>

    <div class="visualmodo-advertising mt-5">
        <h2><?php echo __( 'Write For Us', 'vslmd' ); ?></h2>
        <p class="visualmodo-advertising__description"><?php echo __( 'If you are a talented writer and have some valuable information, ideas or techniques to share, you are welcome to submit a guest post to us. &#9997;', 'vslmd' ); ?></p>
        <a href="https://visualmodo.com/write-for-us/" class="button button-primary button-hero" target="_blank"><?php echo __( 'Submit An Article', 'vslmd' ); ?></a>
    </div>

    <div class="visualmodo-useful-links mt-5">
        <h2 class="visualmodo-useful-links-title"><?php echo __( 'Useful Links', 'vslmd' ); ?></h2>
        <div class="visualmodo-useful-links__items">
            <div class="visualmodo-useful-links__help-center">
                <h3><?php echo __( 'Help Center', 'vslmd' ); ?></h3>
                <a href="https://visualmodo.com/help/" target="_blank"><?php echo __( 'Knowledge base', 'vslmd' ); ?></a>
                <a href="https://visualmodo.com/documentation/" target="_blank"><?php echo __( 'Documentation', 'vslmd' ); ?></a>
                <a href="https://visualmodo.com/acc/submit-ticket/" target="_blank"><?php echo __( 'Contact support', 'vslmd' ); ?></a>
            </div>
            <div class="visualmodo-useful-links__x">
                <h3><?php echo __( 'Company', 'vslmd' ); ?></h3>
                <a href="https://visualmodo.com/faq/" target="_blank"><?php echo __( 'FAQ', 'vslmd' ); ?></a>
                <a href="https://visualmodo.com/about/" target="_blank"><?php echo __( 'About', 'vslmd' ); ?></a>
                <a href="https://visualmodo.com/customers/" target="_blank"><?php echo __( 'Customers', 'vslmd' ); ?></a>
            </div>
            <div class="visualmodo-useful-links__y">
                <h3><?php echo __( 'Articles', 'vslmd' ); ?></h3>
                <a href="https://visualmodo.com/blog/" target="_blank"><?php echo __( 'Blog', 'vslmd' ); ?></a>
                <a href="https://visualmodo.com/write-for-us/" target="_blank"><?php echo __( 'Write For Us', 'vslmd' ); ?></a>
                <a href="https://visualmodo.com/category/wordpress/" target="_blank"><?php echo __( 'WordPress', 'vslmd' ); ?></a>
            </div>
        </div>
    </div>

    <div class="visualmodo-advertising mt-5">

        <h2 class="visualmodo-useful-links-title"><?php echo __( 'Explore the vibrant businesses within Visualmodo Holding Inc!', 'vslmd' ); ?></h2>
        <div class="visualmodo-useful-links__items">
            <a href="https://growwwth.net" target="_blank">Growwwth</a>
            <a href="https://openaisuite.com" target="_blank">OpenAI Suite</a>
            <a href="https://sites.gallery" target="_blank">Sites Gallery</a>            
        </div>

	</div>

</div>
