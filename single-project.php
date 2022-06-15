<?php

get_header();   ?>

<?php


            $curentpage = get_query_var('paged');
            $args = array
            (
                'post_type'      => 'project',
                'posts_per_page' => '3',
                'publish_status' => 'published',
                'paged' => $curentpage
            );


            $query = new WP_Query($args);
    
 // End Pagination 
?>


 <center>     
        <h2> <a href=" <?php the_permalink(); ?> "> <?php the_title(); ?></a></h2>
        <a href=" <?php the_permalink(); ?> ">  <?php the_post_thumbnail();?> </a>
        <p><?php the_content(); ?></p>
        <h5"> <?php  $name = get_post_meta($post->ID,"post_name",true) ?>
        <?php echo $name ?>
    </h5>
        <h6  style="text-align: center;"> <?php  $email = get_post_meta($post->ID,"post_email",true) ?>
        <?php echo $email ?>
    </h6></center>


<br>



<?php 

get_footer();

?>
