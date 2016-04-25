<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid header-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <section class="pull-right">
            <p class="pull-left">Level 27, 101 Collins Street Melbourne VIC 3000  |  <span>03 9653 6400</span>  |  info@onel.com.au</p>
            <ol class="pull-left connect">
              <?php dynamic_sidebar( 'header-social-media' ); ?>
              </ol>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="nav-bg">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
          <?php
          if ( function_exists( 'ot_get_option' ) ) {
            $siteLogo = ot_get_option( 'site_logo' );
            echo '<img src="'.$siteLogo.'" alt="">';
          }
          ?>
        </a>
      </div>

      <nav class="collapse navbar-collapse main-menu pull-right-sm" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>