<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <div class="container-fluid footermenu">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <section>
            <a class="footer-brand pull-left" href="<?= esc_url(home_url('/')); ?>">
              <?php
              if ( function_exists( 'ot_get_option' ) ) {
                $siteLogo = ot_get_option( 'site_logo' );
                echo '<img src="'.$siteLogo.'" alt="">';
              }
              ?>
            </a>
            <nav class="pull-right">
              <?php
              if (has_nav_menu('secondary_navigation')) :
                wp_nav_menu(['theme_location' => 'secondary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
              endif;
              ?>
            </nav>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid footnote">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <section class="pull-right">
              <?php
              if ( function_exists( 'ot_get_option' ) ) {
                $footer_copyright = ot_get_option( 'footer_copyright' );
                echo $footer_copyright;
              }
              ?>
            </section>
          </div>
        </div>
    </div>
  </div>
</footer>
