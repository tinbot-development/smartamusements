<header class="banner">
  <section class="header-top bg-primary">
    <div class="container">
      <aside class="col-sm-6">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo IMAGES_URL;?>/bannerlogo.png" alt="<?php bloginfo('name'); ?>" class="banner-logo img-responsive"/></a>
      </aside>
      <aside class="col-sm-6 sidebar-header">
        <?php dynamic_sidebar('sidebar-header');?>
      </aside>
    </div>
  </section>

  <section class="banner-slider bg-info">
      <div class="container">
          <div class="col-md-12">
            <?php get_template_part('/templates/banner','slider')?>
          </div>
      </div>

  </section>
  <section class="banner navbar navbar-inverse navbar-static-top bg-warning" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </nav>
    </div>
  </section>
</header>
