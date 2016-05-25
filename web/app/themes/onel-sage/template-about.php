<?php
/**
 * Template Name: About Us Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <section>
      <h3 class="sub-heading"><?php echo get_field('sub_heading'); ?> </h3>
    </section>

  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>
