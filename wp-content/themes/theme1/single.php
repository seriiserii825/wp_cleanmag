
<?php get_header(); ?>
<div class="content-wrapper">
    <div class="content-main">
        <div class="content">


            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="articles">

                    <div class="articles-head">
                        <span class="articles-date"><img src="<?php bloginfo("template_url"); ?>/images/articles-autor.jpg" alt=""/> <span><?php the_author(); ?></span> - <?php echo the_time('M d, Y'); ?></span>
                        <span class="articles-comments"><img src="<?php bloginfo("template_url"); ?>/images/articles-comment.jpg" alt=""/> <a href="#"><?php comments_popup_link(); ?></a></span>
                    </div>

                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>
                
                <?php comments_template(); ?>

            <div class="pager">
                <?php previous_post_link('<span>&laquo;</span>%link'); ?>
                <?php next_post_link(); ?>
            </div>

        </div>
        <?php get_sidebar(); ?>
    </div>
</div>


<?php get_footer(); ?>
