<?php
/**
 * Template Name: About Us Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <section>
      <h2 class="sub-heading entry-title"><?php echo get_field('sub_heading'); ?> </h2>
    </section>

  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>
