<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/23/16
 * Time: 8:19 PM
 */
?>
<div class="container-fluids" id="what-we-do">
    <?php
    $bgimage = get_field('sub_banner_background_image');
    ?>
    <div class="what-we-do-content" style="background: url(<?php echo $bgimage['url']; ?>) center / cover no-repeat; height: 380px">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 bg-secondary-light">
                    <?php the_field('sub_banner_content');?>
                </aside>
            </div>
        </div>
    </div>
</div>