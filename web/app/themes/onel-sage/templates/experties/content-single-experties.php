<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/28/16
 * Time: 8:58 PM
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <div class="col-xs-12 col-md-sm-6 col-md-8">
        <article <?php post_class(); ?>>
            <header>
                <h2 class="entry-title"><?php echo get_field('expertise_name'); ?></h2>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <footer>
                <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
            </footer>
            <?php comments_template('/templates/comments.php'); ?>
        </article>
    </div>
    <div class="col-xs-12 col-md-sm-6 col-md-4 aside">
<!--        --><?php
//            $expertise_image = get_field('expertise_image');
//        ?>
<!--        <img src="--><?php //echo $expertise_image; ?><!--" alt="">-->
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('full');
        }
        ?>
    </div>
<?php endwhile; ?>
