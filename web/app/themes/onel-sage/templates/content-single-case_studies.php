<?php while (have_posts()) : the_post(); ?>
    <section class="row">
        <div class="col-xs-12 col-md-sm-6 col-md-8">
                <article <?php post_class(); ?>>
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
               <?php
                   if ( has_post_thumbnail() ) {
                       the_post_thumbnail('full');
                   }
               ?>
        </div>
    </section>
<?php endwhile; ?>