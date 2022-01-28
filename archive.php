<?php get_header(); ?>



<div class="container">
    <h1> <?php single_cat_title(); ?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <table class="archive_table">
            <tr>
                <td class="more_width_td">
                    
        <div class="card">
            <div class="card-body">
                <h3> <?php the_title();?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>

            </div>
        </div>
                </td>
                <td>
                <p>
                    With the way the tourism industry is currently run,
                     the disadvantages of tourism may greatly outweigh 
                     the advantages in a country. The first factor to 
                     take into consideration is environmental damage. 
                     When a country has a high tourist attraction, the
                      number of people occupying a space increases 
                      immensely. As a result, the release of carbon 
                      monoxide gases can increase due to plane and car
                       use affecting the country’s environment. Many 
                       countries with ancient ruins or natural 
                       attractions are also in danger of destruction
                        or erosion with significant foot traffic and
                        human interaction. Additionally, flora and 
                        fauna can decrease in areas or change their
                         growth and migration patterns when there is 
                         an overflow of humans interact. Foot traffic
                          and continuous touching can also slowly degrade
                           the stability of ancient structures.
                    </p>
                </td>
            </tr>
        </table>

    <?php endwhile; endif;?>
</div>
 

<?php get_footer(); ?>