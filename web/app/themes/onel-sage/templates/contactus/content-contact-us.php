<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/29/16
 * Time: 11:14 AM
 */
?>
<div class="container-fluid rounded-items">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <div class="entry-summary">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="row contact-content">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contact-form">
                <?php
                    if(is_active_sidebar( 'contact-us-form' )):
                        dynamic_sidebar( 'contact-us-form' );
                    endif;
                ?>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

                <?php
                if(is_active_sidebar( 'contact-us-map' )):
                    dynamic_sidebar( 'contact-us-map' );
                endif;
                ?>

            </div>
        </div>

    </div>
</div>
