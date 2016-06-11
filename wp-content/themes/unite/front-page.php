<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * @link http://themes.required.ch/?p=606
 */

//get_header(); ?>

<?php

   

 get_header(); ?>
<style>
#homeCarousel{
	
	padding-top:0px;
	margin-top:0px;
	
}

#homeCarousel > .carousel-inner > .item {
	
	height : 100%;
	max-height:300px;
	
}

.carousel-text{
	
	position:absolute;
	font-size:24px;
	background-color: rgba(0,0,0,0.5);
    width: 100%;
	padding-left: 5%;
	bottom: 0%;
	
	color:white;
	display:flex;
	align-items:center;
	
}

.carousel-text > span{

	font-family: 'Fontdiner Swanky', cursive;
}

.front-page-post-article {
	
	box-shadow: 0px 0px 15px #888888;
	padding: 5px;
	text-align: center;
	font-weight: bold;
	display:inline-block;
}

*, *:before, *:after {box-sizing:  border-box !important;}

.front-page-post-div{
	
	padding-bottom:15px;

    /*Only for windows phone browsers*/
	max-width: 90vw;
	align-content: center;
    position: relative;
    min-height: 1px;
    float: left;
    width: 100%;
}

	

.front-page-posts-wrapper{
 -moz-column-width: 15em;
 -webkit-column-width: 15em;
 column-width: 15em;
 -moz-column-gap: .5em;
 -webkit-column-gap: .5em; 
 column-gap: .5em;  
 
}


.front-page-posts-wrapper > article {
 display: inline-block;
 margin:  .5em;
 padding:  0; 
 width:98%;
}

.front-page-post-thumbnail{
	max-width:100%; !important
}
</style>
	<div id="primary" class="content-area col-sm-12 col-md-12">

<div id="homeCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators >
  <ol class="carousel-indicators">
    <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#homeCarousel" data-slide-to="1"></li>
    <li data-target="#homeCarousel" data-slide-to="2"></li>
    <li data-target="#homeCarousel" data-slide-to="3"></li>
  </ol-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://ardentbeings.com/wp-content/uploads/2016/05/light.jpg" alt="Chania">
	  <div class="carousel-text">
	     <span> Welcome Ardent Being! ;) </span>
	  </div>
    </div>

    <!--div class="item">
      <img src="http://localhost:777/wordpress-4.4.2/wordpress/wp-content/uploads/2016/05/natural.jpg" alt="Chania">
    </div-->

  
  </div>
	</div>
		<main id="main" class="site-main" role="main">
           <div class="front-page-posts-wrapper">
		   
			<?php 
			$top_post_query = new WP_Query( array(
				'meta_key' => 'post_views_count',
				'orderby' => 'meta_value_num',
				'posts_per_page' => 10
			) );
			
			
			while ( $top_post_query->have_posts() ) : $top_post_query->the_post(); ?>
			  <a href=<?php the_permalink(); ?> >
               <div class="front-page-post-div ">
				<article class="front-page-post-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				   
				   <?php
				   echo get_the_title();
				
				   if ( has_post_thumbnail() ) {
	             
				  ?>
					<img class="front-page-post-thumbnail" src=<?php the_post_thumbnail_url(); ?> alt="No Image">
				
				<?php
				    
					
				} 
				else
				{  
			?>
					<img class="front-page-post-thumbnail" src="http://ardentbeings.com/wp-content/uploads/2016/05/default.png" alt="No Image">
					
			<?php
				}

				?>
					
				</article><!-- #post-## -->
			  </div>
             </a>
			<?php endwhile; // end of the loop. ?>
		  </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

?>