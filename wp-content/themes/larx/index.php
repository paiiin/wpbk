<?phpglobal $wp_query;$sidebar_position=th_theme_data('home_sidebar_position','right');?><?php get_header(); ?>    <section class="i-blog-section">        <div class="container">               <div class="row">                <?php                if($sidebar_position=="no"){                    $page_class="clearfix col-lg-12 col-md-12";                }else{                    $page_class="clearfix col-lg-9";                }                ?>                <?php                if($sidebar_position=="left"){                    $page_class .=' pull-right';                }                ?>                <div class="<?php echo esc_attr($page_class); ?>">                    <?php echo get_template_part('loop')?>                </div><!-- single-post-wrapper -->                <?php if($sidebar_position!="no"){ ?>                    <div id="sidebar" class="col-lg-3">                        <?php get_sidebar(); ?>                    </div><!-- end sidebar -->                <?php } ?>                        </div>                 </div><!-- end container -->		        <div class="text-center i-blog-pagination">            <?php echo paginate_links(); ?>        </div>    </section><!-- end section-single --><?php get_footer(); ?>