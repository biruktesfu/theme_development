<!DOCTYPE html>
<html lang="en">


<head>

    <?php wp_head(); ?>

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    
</head>


<body <?php body_class(); ?> >
    
<header class="sticky-top"> 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
      <?php wp_nav_menu( 
                array( 
                        'theme_location' => 'top-menu', 
                        'menu_id' => 'primary-menu', 
                        'container_class'=> 'ms-auto ', 
                        'menu_class'=>'navbar-nav' 
                    ) 
                ); ?> 
      </li>

    </ul>
  </div>
</nav>





 
    
</header>

