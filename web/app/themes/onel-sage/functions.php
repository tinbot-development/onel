<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/wp_bootstrap_navwalker.php', // Theme customizer
  'lib/shortcodes.php' // Theme Shortcodes
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/**
 ** Short Code function to display Featured Case Study to widget sidebar
 **/
function featured_case_study(){
  global $post;
  $result = '';
  // WP_Query arguments
  $args = array(
      'posts_per_page'   =>  -1,
      'post_type'          =>  'case_studies',
      'order'             =>  'ASC',
      'meta_key'=>'case_study_featured',
      'meta_value'=> true,
      'compare'=> '=='
  );

  // The Query
  $posts = new WP_Query( $args );
  if( $posts ): ?>
    <?php
    foreach( $posts as $post ):

      setup_postdata( $post );

      $case_study_title_featured = get_field('case_study_title');
      $case_study_featured = get_field('case_study_featured');
      $case_study_image_featured = get_field('case_study_image');
      $case_study_excerpt_text_featured = get_field('case_study_excerpt_text');
      ?>

      <?php if($case_study_featured == 1 ): ?>
      <?php $result = '<div class="featured-service">';
      $result .='<a href="'.get_the_permalink().'" >';
      $result .='<img class="img-circle" src="'.$case_study_image_featured.'" alt="">';
      $result .='<section>';
      $result .='<p>'.$case_study_title_featured.'</p>';
      $result .='<span class="arrow-down">&nbsp;</span>';
      $result .='</section>';
      $result .='<div>&nbsp;</div>';
      $result .='</a>';
      $result .='</div>';
      ?>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  <?php
  return $result;
}
add_shortcode( 'case-study', 'featured_case_study' );
