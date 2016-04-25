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
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2><?php
                    if ( function_exists( 'ot_get_option' ) ) {
                        $our_expertise_header_title = ot_get_option( 'our_expertise_header_title' );
                        echo $our_expertise_header_title;
                    }
                    ?></h2>
            </div>
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
                    ?>
                    <div class="col-sm-4 col-sm-6 col-md-4 col-lg-4 item">
                            <a href="<?php the_permalink(); ?>" >
                                <img class="img-circle" src="<?php echo $expertise_image; ?>" alt="">
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
