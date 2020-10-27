<?php get_header();?>
    
    <!-- Sidebar -->
    <?php if( is_active_sidebar('blog-sidebar')): ?>

    <?php dynamic_sidebar('blog-sidebar');?>

    <?php endif;?>
        


        
    <!-- Hier Code für den Blogpost Allgemein -->
      
    <?php single_cat_title();?>

    <?php if(has_post_thumbnail()):?>
               
    <?php endif; ?>
                
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_title();?>
        <?php the_excerpt(); ?>
    <a href="<?php the_permalink();?>" class="btn btn-sucess" style="color: green;">mehr</a>

    <?php endwhile; endif; ?>

    

<?php get_footer();?>