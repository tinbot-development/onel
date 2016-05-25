<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/29/16
 * Time: 11:37 AM
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
<ul class="services">
            <?php
            $posts = get_posts(array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'service',
                'order'             => 'ASC'
            ));
            $ctr = 0;
            if( $posts ): ?>
                <?php
                foreach( $posts as $post ):
                    setup_postdata( $post );
                    ?>

                    <?php
                    $service_title = get_field('sub_title');
                    $service_image = get_field('featured_image');
                    ?>

                    <?php /**
                <?php if($ctr%2 == 0 ) : ?>
                    <div class="row">
                        <div class="col-sm-12 col-sm-12 col-md-4 col-lg-4">
                            <a href="<?php the_permalink()?>"><img class="" src="<?php echo $service_image; ?>" alt=""></a>
                        </div>
                        <div class="col-sm-12 col-sm-12 col-md-8 col-lg-8">
                            <h3><a href="<?php the_permalink()?>"> <?php echo $service_title; ?></a></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                 <?php else: ?>

                    <div class="row">
                        <div class="col-sm-12 col-sm-12 col-md-4 col-lg-4 pull-right">
                            <a href="<?php the_permalink()?>"><img class="" src="<?php echo $service_image; ?>" alt=""></a>
                        </div>
                        <div class="col-sm-12 col-sm-12 col-md-8 col-lg-8">
                            <h3><a href="<?php the_permalink()?>"> <?php echo $service_title; ?></a></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                 <?php endif; ?>

                    **/ ?>


                    <?php if($ctr%2 == 0 ) : ?>
                    <li class="odd">
                        <a href="<?php the_permalink()?>"><img class="pull-left" src="<?php echo $service_image; ?>" alt=""></a>
                        <section>
                            <h3><a href="<?php the_permalink()?>"> <?php echo $service_title; ?></a></h3>
                            <?php the_excerpt(); ?>
                        </section>
                    </li>
                <?php else: ?>
                        <li class="even">
                            <a href="<?php the_permalink()?>"><img class="pull-right" src="<?php echo $service_image; ?>" alt=""></a>
                            <section>
                                <h3><a href="<?php the_permalink()?>"> <?php echo $service_title; ?></a></h3>
                                <?php the_excerpt(); ?>
                            </section>
                        </li>
                <?php endif; ?>

                <?php $ctr++; endforeach; ?>
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>
</ul>
    </div>
</div>