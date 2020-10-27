<?php get_header();?>

    
    <!-- Sidebar -->
    <?php if( is_active_sidebar('page-sidebar')): ?>

    <?php dynamic_sidebar('page-sidebar');?>

    <?php endif;?>
        

    <!-- Hier Code für die Seiten Allgemein -->
    <?php the_title();?>


    <!--Hier Geändert für Bild für Thumpnail-->
    <?php if(has_post_thumbnail()):?>

                

    <?php endif; ?>




    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; endif; ?>
    


<?php get_footer();?>