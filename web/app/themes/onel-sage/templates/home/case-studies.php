<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/23/16
 * Time: 8:38 PM
 */
?>
<div class="container-fluid" id="case-studies">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2>
                    <?php
                    if ( function_exists( 'ot_get_option' ) ) {
                        $case_studies_header_title = ot_get_option( 'case_studies_header_title' );
                        echo $case_studies_header_title;
                    }
                    ?></h2>
            </div>

            <div class="col-sm-12 aside">
                <div class="row">
                    <?php
                    $posts_2 = get_posts(array(
                        'posts_per_page'	=>   -1,
                        'post_type'			=>  'case_studies',
                        'order'             =>  'ASC'
                    ));

                    if( $posts_2 ): ?>
                    <?php
                        $ctr = 0;
                    foreach( $posts_2 as $post ):
                    setup_postdata( $post );
                    ?>

                    <?php
                    $case_study_title = get_field('case_study_title');
                    $case_study_featured_2 = get_field('case_study_featured');
                    $case_study_image = get_field('case_study_image');
                    $case_study_excerpt_text = get_field('case_study_excerpt_text');
                    ?>

                        <?php if($case_study_featured_2 == 0): ?>
                        <?php if($ctr < 4): ?>
                            <div class="col-sm-6 col-md-6 col-lg-6 item">
                                <section>
                                    <img src="<?php echo $case_study_image; ?>" alt="">
                                    <h2><?php echo $case_study_title; ?> <a href="<?php the_permalink(); ?>" class="hvr-icon-forward pull-right"><span>&nbsp;</span></a></h2>
                                </section>
                            </div>
                    <?php endif; endif; ?>
                    <?php
                        if($case_study_featured_2 == 'no'):
                            $ctr++;
                        endif;

                         endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>