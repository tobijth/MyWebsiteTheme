<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>   
        <?php wp_nav_menu(
                array(
                'theme_location' => 'top-menu'
                )
                )
            ?>
      