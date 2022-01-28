
<?php
get_header();
?>

		<article class="content px-3 py-5 p-md-5">
        <?php
            if( have_posts() ){
                while( have_posts() ){
                    the_post ();
                    the_content();
                }
            }
        ?>
<div class="container">
    <h1> <?php the_title(); ?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; endif;?>
</div>
 

	    </article>

    
<?php
get_footer();
?>