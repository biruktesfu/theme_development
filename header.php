<!DOCTYPE html>
<html lang="en">


<head>

    <?php wp_head(); ?>

    <link href="bootstrap.min.css" rel="stylesheet">

    
</head>


<body <?php body_class(); ?> >
    


<header class="sticky-top">

    <div class="container">
    <?php wp_nav_menu(

        array (

            'theme_location' => 'top-menu',
            'menu_class' => 'navigaton'

        )

        );?>
        </div>
</header>