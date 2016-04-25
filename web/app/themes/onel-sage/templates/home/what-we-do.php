<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/23/16
 * Time: 8:19 PM
 */
?>
<div class="container-fluids" id="what-we-do">
<!--    --><?php
//    if ( function_exists( 'ot_get_option' ) ) {
//        $what_we_do_image = ot_get_option( 'what_we_do_image' );
//        echo '<img class="img-responsive" src="'.$what_we_do_image.'" alt="">';
//    }
//    ?>
<!--    <div class="what-we-do-content">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-12 col-md-12 col-lg-12">-->
<!--                    <section>-->
<!--                        --><?php
//                        if ( function_exists( 'ot_get_option' ) ) {
//                            $what_we_do_title = ot_get_option( 'what_we_do_title' );
//                            echo '<h2>'.$what_we_do_title.'</h2>';
//                        }
//                        ?>
<!--                        --><?php
//                        if ( function_exists( 'ot_get_option' ) ) {
//                            $what_we_do_description = ot_get_option( 'what_we_do_description' );
//                            echo $what_we_do_description;
//                        }
//                        ?>
<!--                    </section>-->
<!--                    --><?php
//                    if ( function_exists( 'ot_get_option' ) ) {
//                        $what_we_do_read_more_link = ot_get_option( 'what_we_do_read_more_link' );
//                        echo '<a class="hvr-icon-forward pull-right" href="'.$what_we_do_read_more_link.'">&nbsp;</a>';
//                    }
//                    ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <?php
        echo do_shortcode('[smartslider3 slider=1]');
    ?>
</div>