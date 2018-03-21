<?php get_header();?>

<div class="content-wrapper">
	<div class="content-main">
    	
        <div class="content">
        
            <!-- articles -->
             
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="articles">
                
                    <div class="articles-gen-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php else: ?>
                                <img src="<?php bloginfo('template_url') ?>/images/no-image.jpg" alt="" />
                            <?php endif; ?>
                        </a>
                    </div>

                    <div class="articles-head">
                        <span class="articles-date"><img src="<?php bloginfo('template_url') ?>/images/articles-autor.jpg" alt="admin" /> <span><?php the_author(); ?></span>
                         - <?php the_time('d-m-Y'); ?></span>
                        <span class="articles-comments"><img src="<?php bloginfo('template_url') ?>/images/articles-comment.jpg" alt="commets" /> 
                            <a href="#"><?php comments_popup_link(); ?></a>
                        </span>
                    </div>
                    
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                   
                    <p><?php the_content(); ?></p>
                
                </div>

              <?php endwhile; ?>
                <div class="pager">
                    <?php 
                        previous_post_link('<span>&laquo;</span> %link');
                        next_post_link('%link <span>&raquo;</span>'); 
                    ?>
                </div>
              <?php else: ?>
                <h2>Ничего не найдено...</h2>
            <?php endif; ?>  
                
            
            <!-- atrticles -->
            
        
        </div>
        
        <div class="sidebar-main">


        	
            <div class="sidebar-widget">
                <div class="search-main">
                    <form action="" id="search-form" method="get">
                        
                        <input name="s" class="search-txt" type="text" value="Поиск" onBlur="if(this.value=='')this.value='Поиск'" onFocus="if(this.value=='Поиск')this.value=''" />
                        <input type="image" src="<?php bloginfo('template_url') ?>/images/search-btn.jpg" />
                        
                    </form>
                </div>
            </div>
            
            <?php if(!dynamic_sidebar( 'sidebar' )): ?>
                <div class="sidebar-widget">
                    <h3>Виджеты сайдбара</h3>
                </div>
            <?php endif; ?>

            
            <div class="sidebar-widget">
            	<div class="facebook">
                	<img src="<?php bloginfo('template_url') ?>/images/facebook.jpg" alt="" />
                </div>
            </div>
            
        </div>
    </div>
        
</div>
<?php get_footer();?>
