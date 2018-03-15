<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->

  <!-- <script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>
  <script src="js/jqFancyTransitions.1.8.min.js" type="text/javascript"></script> -->

<title><?php wp_get_document_title();
	bloginfo( "name" ); ?></title>
	
	<?php wp_head(); ?>
</head>

<body>

<div class="head-wrapper">
  <div class="head">
      <div class="head-logo">
        <a href="/"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.jpg" alt=""/></a>
      </div>
        <div class="head-banner">
          <!-- <?php $banner = new WP_Query( [ 'post_type' => 'banner', 'posts_per_page' => 1, 'order' => 'ASC' ] ); ?>
           -->
	
	        <?php if ( $banner->have_posts() ) : while ( $banner->have_posts() ) : $banner->the_post(); ?>
		        <?php the_post_thumbnail( 'full' ); ?>
	        <?php endwhile; ?>
              <!-- post navigation -->
	        <?php else: ?>
              <h2>Баннер из виджетов</h2>
	        <?php endif; ?>

          <!-- <img src="<?php bloginfo( "template_url" ); ?>/images/img1.jpg" alt='' />
                        <img src="<?php bloginfo( "template_url" ); ?>/images/img1.jpg" alt='' />
                        <img src="<?php bloginfo( "template_url" ); ?>/images/img1.jpg" alt='' />             -->
        </div>
    </div>
</div>


<div class="menu-wrapper">
  <div class="menu-main">

      <?php if ( ! dynamic_sidebar( "header-menu" ) ): ?>
        <span>Это место для меню</span>
      <?php endif; ?>

    <ul class="ico-social">
        <li><a href="#"><img src="<?php bloginfo( "template_url" ); ?>/images/ico-vk.png" alt="мы вконтакте"/></a></li>
          <li><a href="#"><img src="<?php bloginfo( "template_url" ); ?>/images/ico-youtobe.png" alt=""/></a></li>
          <li><a href="#"><img src="<?php bloginfo( "template_url" ); ?>/images/ico-facebook.png" alt=""/></a></li>
          <li><a href="#"><img src="<?php bloginfo( "template_url" ); ?>/images/ico-twitter.png" alt=""/></a></li>
        </ul>
    </div>
</div>
