<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title><?php bloginfo('name');
	wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
<div class="head-wrapper">
	<div class="head">
    	<div class="head-logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.jpg" alt=""/></a>
      </div>
	  
	  <?php $banner = new WP_Query(['post_type' => 'banner', 'posts_per_page' => 1]); ?>
	  
	  <?php if($banner->have_posts()) : ?>

        <div class="head-banner">
    
          <?php while($banner->have_posts()) : $banner->the_post(); ?>
	          <?php the_post_thumbnail('full'); ?>
          <?php endwhile; ?>
          
        </div>
	  <?php else: ?>
        <h2 style="text-align: center;">Место для баннера</h2>
	  <?php endif; ?>
   
  </div>
</div>
<div class="menu-wrapper">
	<div class="menu-main">
    
     <?php wp_nav_menu([
	     'theme_location'  => '',
	     'menu'            => 'header-menu',
	     'container'       => '',
	     'container_class' => '',
	     'container_id'    => '',
	     'menu_class'      => 'menu',
	     'menu_id'         => '',
	     'echo'            => true,
	     'fallback_cb'     => 'wp_page_menu',
	     'before'          => '',
	     'after'           => '',
	     'link_before'     => '',
	     'link_after'      => '',
	     'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	     'depth'           => 0,
	     'walker'          => '',
     ]) ?>
	  
    
        <ul class="ico-social">
          
            <?php if(!dynamic_sidebar('header-socials')):?>
              <h4>Место для иконок социальных сетей</h4>
            <?php endif;?>
          
        </ul>
    </div>
  
</div>
