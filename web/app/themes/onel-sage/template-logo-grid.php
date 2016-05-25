<?php
/**
 * Template Name: Page - Logo Grid
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <h3 class="sub-heading col-md-12"><?php echo get_field('sub_heading'); ?> </h3>

  <?php get_template_part('templates/content', 'logo-grid'); ?>
<?php endwhile; ?>