<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/23/16
 * Time: 11:23 AM
 */
?>
<div class="container-fluid" id="banner-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <p><?php
                    if ( function_exists( 'ot_get_option' ) ) {
                        $banner_header_title = ot_get_option( 'banner_header_title' );
                        echo $banner_header_title;
                    }
                    ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluids hero" id="banner">
    <?php
        echo do_shortcode('[smartslider3 slider=2]');
    ?>
</div>