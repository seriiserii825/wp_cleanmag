<?php get_header(); ?>
<div class="content-wrapper">
	<div class="content-main">
    	<div class="content">

               <div id='slideshowHolder'>
                    <?php $slider = new WP_Query( [ 'post_type' => 'slider', 'order' => 'ASC' ] ); ?>
	
	               <?php if ( $slider->have_posts() ) : while ( $slider->have_posts() ) : $slider->the_post(); ?>
		               <?php the_post_thumbnail(); ?>
	               <?php endwhile; ?>
	
	               <?php else: ?>
                     <h2>Слайдер из виджетов</h2>
	               <?php endif; ?>

                 <!-- <img src="<?php bloginfo( "template_url" ); ?>/images/img1.jpg" alt='' />
                        <img src="<?php bloginfo( "template_url" ); ?>/images/img2.jpg" alt='' />
                        <img src="<?php bloginfo( "template_url" ); ?>/images/img3.jpg" alt='' /> -->
                </div>
	  
	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="articles">

                    <div class="articles-gen-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ): ?>
	                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                              <img src="<?php bloginfo( "template_url" ); ?>/images/no-image.jpg" alt=''/>
                            <?php endif; ?>
                        </a>
                    </div>

                    <div class="articles-head">
                        <span class="articles-date">
                            <img src="<?php bloginfo( "template_url" ); ?>/images/articles-autor.jpg" alt=""/>
                            <span><?php the_author(); ?></span> - <?php the_time( 'M d, Y' ); ?> <!-- Nov 28th, 2010 -->
                        </span>
                        <span class="articles-comments"><img src="<?php bloginfo( "template_url" ); ?>/images/articles-comment.jpg" alt=""/> <a href="#">10 Comments</a></span>
                    </div>

                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			
			    <?php the_excerpt(); ?>

              <p><a class="read-more" href="<?php the_permalink(); ?>">Read More</a></p>
                </div>
	  
	      <?php endwhile; ?>
            <!-- post navigation -->
	      <?php else: ?>
            <!-- no posts found -->
	      <?php endif; ?>


        <div class="pager">
            	<a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>of</span>
                <a href="#">75</a>
                <a href="#" class="prev-next">Next</a>
            </div>
            
        </div>
	  
	  <?php get_sidebar(); ?>
	  
	  <?php get_footer(); ?>
