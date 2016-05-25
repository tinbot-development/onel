<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/28/16
 * Time: 5:05 PM
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
            <?php
            $posts = get_posts(array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'case_studies',
                'order'             => 'ASC'
            ));
            if( $posts ): ?>
                <?php
                foreach( $posts as $post ):
                    setup_postdata( $post );
                    ?>

                    <?php
                    $case_study_title = get_field('case_study_title');
                    $case_study_image = get_field('case_study_image');
                    ?>

                    <div class="col-sm-4 col-sm-6 col-md-4 col-lg-4 item">
                        <a href="<?php the_permalink(); ?>" >
                            <img class="img-circle" src="<?php echo $case_study_image; ?>" alt="">
                            <section>
                                <p><?php echo $case_study_title; ?></p>
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