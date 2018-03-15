<?php get_header(); ?>
<div class="content-wrapper">
	<div class="content-main">
    	<div class="content">

            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="articles">


                    <div class="articles-head">
                        <span class="articles-date">
                            <img src="<?php bloginfo( "template_url" ); ?>/images/articles-autor.jpg" alt=""/>
                            <span><?php the_author(); ?></span> - <?php the_time( 'M d, Y' ); ?> <!-- Nov 28th, 2010 -->
                        </span>
                        <span class="articles-comments"><img src="<?php bloginfo( "template_url" ); ?>/images/articles-comment.jpg" alt=""/> <a href="#">10 Comments</a></span>
                    </div>

                    <h1><?php the_title(); ?></h1>
	  
	              <?php the_content(); ?>

                </div>

            <?php endwhile; ?>
              <!-- post navigation -->
            <?php else: ?>
              <!-- no posts found -->
            <?php endif; ?>
	  
	  
	      <?php previous_post_link(); ?> <?php next_post_link(); ?>
        
        </div>
	  
	  <?php get_sidebar(); ?>
	  
	  <?php get_footer(); ?>
