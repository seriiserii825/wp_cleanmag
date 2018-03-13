
<?php get_header(); ?>
<div class="content-wrapper">
    <div class="content-main">
        <div class="content">

            <div id='slideshowHolder'>
                <img src="<?php bloginfo("template_url"); ?>/images/img1.jpg" alt=''/>
                <img src="<?php bloginfo("template_url"); ?>/images/img1.jpg" alt=''/>
                <img src="<?php bloginfo("template_url"); ?>/images/img1.jpg" alt=''/>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="articles">
                    <div class="articles-gen-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="">
                            <?php endif; ?>
                        </a>
                    </div>


                    <div class="articles-head">
                        <span class="articles-date"><img src="<?php bloginfo("template_url"); ?>/images/articles-autor.jpg" alt=""/> <span><?php the_author(); ?></span> - <?php echo the_time('M d, Y'); ?></span>
                        <span class="articles-comments"><img src="<?php bloginfo("template_url"); ?>/images/articles-comment.jpg" alt=""/> <a href="#"><?php comments_popup_link(); ?></a></span>
                    </div>

                    <h1>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <p>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </p>
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
    </div>
</div>

<div class="footer-info-wrapper">
    <div class="footer-info-main">
        <div class="footer-info">
            <h3>about</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut purus odio, quis rutrum nibh. Etiam nec
                tellus malesuada odio tincidunt fringilla quis vitae nisi. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nullam fringilla malesuada convallis. Morbi laoreet volutpat rhoncus.
            </p>
        </div>
        <div class="footer-info">
            <h3>Browse</h3>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About Me</a>
                </li>
                <li>
                    <a href="#">Design Services</a>
                </li>
                <li>
                    <a href="#">Request Quote</a>
                </li>
                <li>
                    <a href="#">Advertise</a>
                </li>
                <li>
                    <a href="#">Contact Me</a>
                </li>
            </ul>
        </div>
        <div class="footer-info">
            <h3>write for us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut purus odio, quis rutrum nibh. Etiam nec
                tellus malesuada odio tincidunt fringilla quis vitae nisi. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nullam fringilla malesuada convallis.
            </p>
            <p>
                <a href="#">Contact Us Now</a>
            </p>
        </div>
    </div>
</div>
<div class="footer-copy">
    <p class="copy"> Copyright © 2010 All Rights Reserved</p>
    <p class="by-st">Designed by
        <a href="#">GraphicsFuel.com</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Powered by
        <a href="#">Wordpress</a>
    </p>
</div>

<script>
    $(document).ready(function(){
        $('#slideshowHolder').jqFancyTransitions({navigation: true, width: 594, height: 279});
    });
</script>
<?php wp_footer();?>
</body>
</html>
