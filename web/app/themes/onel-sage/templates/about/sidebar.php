<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/28/16
 * Time: 4:12 PM
 */

?>

<?php
    if ( function_exists( 'ot_get_option' ) ) {
        $featured_image_about_us = ot_get_option( 'featured_image_about_us' );
        echo '<img src="'.$featured_image_about_us.'" alt="">';
    }

?>


<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail('full');
}
?>