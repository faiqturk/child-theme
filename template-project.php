<?php

// Template Name: project 



get_header();   ?>

<?php 
    

            $curentpage = get_query_var('paged');
            $args = array
            (

                
                // 'order' => $a,
                'post_type'      => 'project',
                'posts_per_page' => '3',
                'publish_status' => 'published',
                'paged'          => $curentpage
            );


            $query = new WP_Query($args);
    
 // End Pagination 
?>

<!-- Search bar -->
<div class="container">
    <br>
    
    <form action="/" method="get"  autocomplete="off">
    <input type="text" name="s" placeholder="Search Code..." id="keyword" class="input_search" >
     <!--     -->
        
    

<!--     Dropdown -->
 <select id="mySelection">
  <option value="">-- Select --</option>
  <option value="new">NEW</option>
  <option value="old">OLD</option>
  <option value="asc">ASC</option>
  <option value="desc">DESC</option>
</select>

       </form>
<?php

 // LOOP for posts
  if($query->have_posts()) {?>
    <div class="search_result" id="datafetch">
<?php
while ( $query->have_posts()){
    $query->the_post();
    
?>

 <center>
<div class="div">
     
        <h2> <a href=" <?php the_permalink(); ?> "> <?php the_title(); ?></a></h2>
        <a href=" <?php the_permalink(); ?> ">  <?php the_post_thumbnail();?> </a>
        <p><?php the_content(); ?></p>
        <h5> <?php  $name = get_post_meta($post->ID,"post_name",true) ?>
        <?php echo $name ?>
    </h5>
        <h6  style="text-align: center;"> <?php  $email = get_post_meta($post->ID,"post_email",true) ?>
        <?php echo $email ?>
    </h6></div></center>
   
<?php             
}?>
<br>


<div class="pagination">
     <?php
     echo paginate_links( array(
         
          'total' => $query->max_num_pages
         ) );
}






 


 ?>
</div>

</div></div>

<?php 

get_footer();

?>