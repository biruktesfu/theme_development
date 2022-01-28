<?php
get_header();
?>

		<article class="content px-3 py-5 p-md-5">
        <?php
            if( have_posts() ){
                while( have_posts() ){
                    the_post ();
                    get_template_part( 'template-parts/content', 'article');

                }
            }
        ?>

	    </article>

    
<?php
get_footer();
?>
<?php get_header(); ?>



<div class="container" align-text="center">
    <h1> <?php single_cat_title(); ?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <?php the_excerpt(); ?>

    <?php endwhile; endif;?>
</div>
 

<?php get_footer(); ?>
