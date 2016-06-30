<?php
/**
 * Created by PhpStorm.
 * User: juanitoabelo
 * Date: 4/29/16
 * Time: 12:53 PM
 */

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<?php while (have_posts()) : the_post(); ?>
    <div class="col-md-12">
        <article <?php post_class(); ?>>
            <header>
                <h2 class="entry-title"><?php echo get_field('sub_title'); ?></h2>
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

<?php endwhile; ?>

