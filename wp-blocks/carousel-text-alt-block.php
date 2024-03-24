<?php //CAROUSEL & TEXT BLOCK ?>

<div class="container carousel-text-alt-block" id="<?php the_field('unique_block_id') ?>">
	<div class="row">

        <div class="col-lg-4">
			<div>
				<?php the_field('title')?>
				<?php the_field('text')?>
			</div>
		</div>
        
		<div class="col-lg-8">
		<?php

if( have_rows('carousel_repeater') ):
	$i = 0; 
	$unique_id = get_field('unique_slider_id');
	
	echo '<div id="carouselID'. $unique_id .'" class="carousel slide carousel-text-block-alt" data-ride="carousel">
			<ol class="carousel-indicators">';
			
    while ( have_rows('carousel_repeater') ) : the_row();
    ?>
    
    <li data-target="#carouselID<?php echo $unique_id; ?>" data-slide-to="<?php echo $i;?>" class="<?php if($i == 0) echo 'active';?>"></li>
			
	<?php   $i++;
	
	endwhile;
		
	echo 	'</ol>
		  <div class="carousel-inner">';
	
 
 	$i = 0; 
    while ( have_rows('carousel_repeater') ) : the_row();
		
		$image = get_sub_field('carousel_image');
		$text = get_sub_field('carousel_text');

	?>
	
	 <div class="carousel-item <?php if($i == 0) echo 'active';?>">
      <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
    </div>
	
	              
	<?php   $i++;

	endwhile;
	
	echo '</div>
			 <a class="carousel-control-prev" href="#carouselID'. $unique_id .'" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselID'. $unique_id .'" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>';

else :

endif;

?>
		</div>
	
	</div>
</div>
