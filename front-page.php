<!-- Hier Code für die Front Page -->
<?php get_header();?>
    <!-- Sidebar -->
        <?php if( is_active_sidebar('front-sidebar')): ?>

        <?php dynamic_sidebar('front-sidebar');?>

        <?php endif;?>
        
   
        <?php the_title();?>

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>
    
<?php get_footer();?>
