<!DOCTYPE html>
<html lang="en">


<head>

    <?php wp_head(); ?>

    <link href="bootstrap.min.css" rel="stylesheet">

    
</head>


<body <?php body_class(); ?> >
    
<header id="masthead" class="site-header"> 
    <nav class="navbar navbar-expand-lg navbar-light"> 
        <div class="container"> 
            <a class="navbar-brand" href="">Travel</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
            </button> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent"> <?php wp_nav_menu( 
                array( 
                        'theme_location' => 'top-menu', 
                        'menu_id' => 'primary-menu', 
                        'container_class'=> 'ms-auto ', 
                        'menu_class'=>'navbar-nav' 
                    ) 
                ); ?> 

                </div> 
        </div> 
    </nav> 
</header>

