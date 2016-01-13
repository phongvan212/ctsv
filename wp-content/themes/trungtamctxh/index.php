<?php get_header(); ?>
<div class="container">
        
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <?php echo do_shortcode(' [image-carousel] '); ?>

            
 			<?php echo do_shortcode(' [sc_news_by_cat cat_id="1" take_num="5" cat_title="THÔNG BÁO"] '); ?>
 			<?php echo do_shortcode(' [sc_news_by_cat cat_id="9" take_num="5" cat_title="MIỄM GIẢM HỌC PHÍ - TRỢ CẤP XÃ HỘI"] '); ?>
 			<?php echo do_shortcode(' [sc_news_by_cat cat_id="10" take_num="5" cat_title="HỌC BỔNG"] '); ?>
 			<?php echo do_shortcode(' [sc_news_by_cat cat_id="11" take_num="5" cat_title="KHEN THƯỞNG - KỶ LUẬT"] '); ?>
 			<?php echo do_shortcode(' [sc_news_by_cat cat_id="12" take_num="5" cat_title="NGOẠI TRÚ"] '); ?>
 
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
 			<?php get_sidebar(); ?>
        </section>
 
</div>
<?php get_footer(); ?>