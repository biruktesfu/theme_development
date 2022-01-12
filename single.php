<?php 

get header();

if(have_posts()) {
    while(have_posts()){
        the_post()?>
        <h1><a href="<?php the permalink()?>"><?php the title()?></a></h1>
        <?php the_content();?>
    
    <?php}
}

get footer();

?>