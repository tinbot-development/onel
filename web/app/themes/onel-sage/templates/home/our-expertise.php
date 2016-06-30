<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/23/16
 * Time: 8:26 PM
 */
?>
<div class="container-fluid" id="our-expertise">
    <div class="container">
        <div class="row">
            <?php
                $posts = get_posts(array(
                    'posts_per_page'	=> 6,
                    'post_type'			=> 'expertise',
                    'order'             => 'ASC'
                ));
                if( $posts ): ?>
                <?php
                    foreach( $posts as $post ):
                    setup_postdata( $post );
                ?>

                    <?php
                        $expertise_name = get_field('expertise_name');
                        $expertise_image = get_field('expertise_image');
                        $custom_link = (get_field('custom_link')) ? do_shortcode(get_field('custom_link')) : get_the_permalink();
                    ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 item">
                            <a href="<?php echo $custom_link; ?>" style="background: url('<?php echo $expertise_image; ?>') no-repeat center / cover;">
                                <section>
                                    <p><?php echo $expertise_name; ?></p>
                                    <span class="arrow-down">&nbsp;</span>
                                </section>
                                <div>&nbsp;</div>
                            </a>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
