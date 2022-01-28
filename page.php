<?php
get_header();
?>

		<article class="content px-3 py-5 p-md-5">
        <?php
            if( have_posts() ){
                while( have_posts() ){
                    the_post ();
                    get_template_part( 'template-parts/content', 'page');

                }
            }
        ?>

	    </article>

    
<?php
get_footer();
?>
<?php get_header(); ?>



<div class="container">
    <h1> <?php the_title(); ?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; endif;?>
</div>
 

<?php get_footer(); ?>
