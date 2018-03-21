<?php get_header();?>

<div class="content-wrapper">
	<div class="content-main">
    	
        <div class="content">
        
        <!-- slider -->    

          <?php $slider = new WP_Query(['post_type' => 'slider', 'order' => 'ASC']);?>
          
          <?php if ( $slider->have_posts() ) : ?>
            <div id='slideshowHolder'>
              <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
              
                <?php the_post_thumbnail( 'full' ); ?>
              
              <?php endwhile; ?>
            </div>
              <?php else: ?>
                <h3>Место для слайдера</h3>
          <?php endif; ?>
          
          <!-- slider --> 

            <!-- articles -->

            <div class="articles">
            	
                <div class="articles-gen-img">
                	<a href="#"><img src="<?php bloginfo('template_url') ?>/images/post-img4.jpg" alt="Preview image" /></a>
            	</div>
                <div class="articles-head">
            		<span class="articles-date"><img src="<?php bloginfo('template_url') ?>/images/articles-autor.jpg" alt="admin" /> <span>Admin</span> - Nov 28th, 2010</span>
                    <span class="articles-comments"><img src="<?php bloginfo('template_url') ?>/images/articles-comment.jpg" alt="commets" /> <a href="#">10 комментариев</a></span>
            	</div>
                
                <h1><a href="#">Thanksgiving greeting card PSD</a></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada orci a commodo. Aenean dapibus urna quis nulla consequat sagittis. Quisque ut ultrices massa. Mauris felis felis, rutrum sit amet vehicula ut, tempus quis lectus...</p>

				<p><a href="#">Read More</a></p>
            
            </div>
            
            <!-- atrticles -->
            
            <!-- pager -->

            <div class="pager">
            	<a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>of</span>
                <a href="#">75</a>
                <a href="#" class="prev-next">Next</a>
            </div>

            <!-- pager -->
        
        </div>
        
        <div class="sidebar-main">
        	
            <div class="sidebar-widget">
            	<div class="search-main">
                    <form action="" id="search-form" method="get">
                        
                        <input class="search-txt" type="text" value="Поиск" onBlur="if(this.value=='')this.value='Поиск'" onFocus="if(this.value=='Поиск')this.value=''" />
                        <input type="image" src="<?php bloginfo('template_url') ?>/images/search-btn.jpg" />
                        
                    </form>
                </div>
            </div>
            
            <div class="sidebar-widget">
            	<ul class="ads-main">
                	<li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/ads1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/ads2.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/ads3.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/ads4.jpg" alt="" /></a></li>
                </ul>
            </div>
            
            <div class="sidebar-widget">
            	<h3>Категории</h3>
                
                <ul class="side-categories">
                	<li><a href="#">Backgrounds</a></li>
                    <li><a href="#">Brushes</a></li>
                    <li><a href="#">Design Articles</a></li>
                    <li><a href="#">Fonts</a></li>
                    <li><a href="#">Free PSD Files</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Logos</a></li>
                    <li><a href="#">Patterns</a></li>
                    <li><a href="#">Textures</a></li>
                    <li><a href="#">Tools & Utilities</a></li>
                </ul>
                <ul class="side-categories">
                	<li><a href="#">Backgrounds</a></li>
                    <li><a href="#">Brushes</a></li>
                    <li><a href="#">Design Articles</a></li>
                    <li><a href="#">Fonts</a></li>
                    <li><a href="#">Free PSD Files</a></li>
                    <li><a href="#">Icons</a></li>
                    <li><a href="#">Logos</a></li>
                    <li><a href="#">Patterns</a></li>
                    <li><a href="#">Textures</a></li>
                    <li><a href="#">Tools & Utilities</a></li>
                </ul>
                
            </div>
            
            <div class="sidebar-widget">
            	<h3>Последние записи</h3>
                <p class="latest-post">
                	<img src="<?php bloginfo('template_url') ?>/images/latest-past1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo('template_url') ?>/images/latest-past1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo('template_url') ?>/images/latest-past1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo('template_url') ?>/images/latest-past1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo('template_url') ?>/images/latest-past1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                <p class="latest-post">
                	<img src="<?php bloginfo('template_url') ?>/images/latest-past1.jpg" alt="" />
                    <a href="#">Thanksgiving greeting card PSD</a>
                </p>
                
            </div>
            
            <div class="sidebar-widget">
            	<div class="facebook">
                	<img src="<?php bloginfo('template_url') ?>/images/facebook.jpg" alt="" />
                </div>
            </div>
            
        </div>
    </div>
    
</div>
<?php get_footer();?>
