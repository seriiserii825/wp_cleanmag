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
                    <p><?php the_excerpt(); ?></p>

                    <p><a href="<?php the_permalink(); ?>">Read More</a></p>
                
                </div>

              <?php endwhile; ?>
                <div class="pager">
                    <?php the_posts_pagination([
                            'show_all'     => false, // показаны все страницы участвующие в пагинации
                            'end_size'     => 1,     // количество страниц на концах
                            'mid_size'     => 1,     // количество страниц вокруг текущей
                            'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                            'prev_text'    => __('Previous '),
                            'next_text'    => __(' Next'),
                            'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                            'screen_reader_text' => __( 'Posts navigation' ),
                        ]); ?>
                </div>
              <?php else: ?>
                <h2>Постов пока еще нету...</h2>
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
