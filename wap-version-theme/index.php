<?php get_header(); ?>

<div class="bgpn"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/a1.jpg" alt="A1"/></a></div>

<div id="heading"><h3>স্পন্সরড পোস্ট</h3></div>
<?php $cat_id = 2;
$latest_cat_post = new WP_Query( array('posts_per_page' => 5, 'category__in' => array($cat_id)));
if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
<div id="post-updates">
<div class="post-updates">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" accesskey="<?php echo $access_key; $access_key++; ?>"><?php the_title(); ?></a><br/>
<small>লেখকঃ <span><?php the_author();?></span>, <?php the_time( get_option( 'date_format' ) ) ?></small>
</div>
</div>
<?php endwhile; endif; ?>

<div class="bgpn"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/a1.jpg" alt="A1"/></a></div>

<div id="heading"><h3>টেক নিউজ</h3></div>
<?php $cat_id = 5;
$latest_cat_post = new WP_Query( array('posts_per_page' => 5, 'category__in' => array($cat_id)));
if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
<div id="post-updates">
<div class="post-updates">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" accesskey="<?php echo $access_key; $access_key++; ?>"><?php the_title(); ?></a><br/>
<small>লেখকঃ <span><?php the_author();?></span>, <?php the_time( get_option( 'date_format' ) ) ?></small>
</div>
</div>
<?php endwhile; endif; ?>

<div class="bgpn"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/a1.jpg" alt="A1"/></a></div>

<div id="heading"><h3>ব্লগ পোস্ট</h3></div>
<?php $access_key = 1; ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<div id="post-updates">
<div class="post-updates">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" accesskey="<?php echo $access_key; $access_key++; ?>"><?php the_title(); ?></a><br/>
<small>লেখকঃ <span><?php the_author();?></span>, <?php the_time( get_option( 'date_format' ) ) ?></small>
</div>
</div>
<?php endwhile; endif; ?>

<div id="page-numbers">
<a href="/page1">১</a> <a href="/page2">২</a> <a href="/page3">৩</a> <a href="/page/5">৫</a> <a href="/page10">১০</a> <a href="/page100">১০০</a>
</div>

<div id="heading"><h3>ক্যাটেগরীসমূহ</h3></div>
<div class="catlists">
<?php wp_list_categories('orderby=name&show_count=1&style=list&title_li'); ?>
</div>
<?php get_footer(); ?>