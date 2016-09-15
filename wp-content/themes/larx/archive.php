<?php $sidebar_position=th_theme_data('home_sidebar_position','right'); ?><?php get_header(); ?>        <section class="i-blog-section">        <div class="container">            <div class="row">                <div class="i-blog-s-title">                    <h1>                                                <strong><?php                            if ( is_day() ) :                                printf( __( 'Daily Archives: %s', 'larx' ), get_the_date() );                            elseif ( is_month() ) :                                printf( __( 'Monthly Archives: %s', 'larx' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'larx' ) ) );                            elseif ( is_year() ) :                                printf( __( 'Yearly Archives: %s', 'larx' ), get_the_date( _x( 'Y', 'yearly archives date format', 'larx' ) ) );                            else :                                _e( 'Archives', 'larx' );                            endif;                            ?></strong>                    </h1>                </div>                <?php                if($sidebar_position == "no"){                    $page_class="clearfix col-lg-12 col-md-12";                }else{                    $page_class="clearfix  col-lg-9";                }                ?>                <?php                if($sidebar_position == "left"){                    $page_class .=' pull-right';                }                ?>                <div class="<?php echo esc_attr($page_class); ?>">                    <?php echo get_template_part('loop')?>                </div><!-- single-post-wrapper -->                <?php if($sidebar_position != "no"){ ?>                    <div id="sidebar" class="col-lg-3">                        <?php get_sidebar(); ?>                    </div><!-- end sidebar -->                <?php } ?>            </div>        </div><!-- end container -->		<div class="text-center i-blog-pagination">            <?php echo paginate_links(); ?>        </div>    </section><!-- end section-single --><?php get_footer(); ?>