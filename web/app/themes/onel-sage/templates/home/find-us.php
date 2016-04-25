<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/23/16
 * Time: 8:50 PM
 */
?>
<div class="container-fluid" id="find-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5">
                <section>
                    <h2>
                        <?php
                        if ( function_exists( 'ot_get_option' ) ) {
                            $find_us_header = ot_get_option( 'find_us_header' );
                            echo $find_us_header;
                        }
                        ?>
                    </h2>
                    <?php
                        if ( function_exists( 'ot_get_option' ) ) {
                            $find_us_location = ot_get_option( 'find_us_location' );
                            echo $find_us_location;
                        }
                    ?>
                </section>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                <section>
                    <?php
                    if ( function_exists( 'ot_get_option' ) ) {
                        $find_us_map = ot_get_option( 'find_us_map' );
                        echo $find_us_map;
                    }
                    ?>
                </section>
            </div>
        </div>
    </div>
</div>
