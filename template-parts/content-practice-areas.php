<section class="header-about">
	<div class="overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<h2 class="mx-auto text-center text-white"><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-1">
					<div class="border-about"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="p-4">
	<div class="container">
		<div class="row justify-content-center py-4">
			<?php
			$args = array(
				'post_type' => array('practice-areas-pt'),
				'posts_per_page' => -1,
				'order' => 'DESC',
			);

			$practice_areas = new WP_Query( $args );

			if ( $practice_areas->have_posts() ) {
				while ( $practice_areas->have_posts() ) {
					$practice_areas->the_post();

					?>

					<div class="col-md-4 p-3 align-items-center">
						<div class="prac-areas-single">
							  <div class="card-body">
							    <h5 class="card-title "><?php echo the_title(); ?></h5>
							    <p class="card-text text-white"><?php echo get_excerpt(); ?></p>
							    <a href="<?php echo the_permalink(); ?>" class="secondary-color" style=" display: block; margin: 0 auto;">Read More
							    </a>
							  </div>
						</div>
					</div>
				<?php 
				}
			} else {
				echo "Error";
			}



					?>
		<?php
				wp_reset_postdata();	
				
			


			?>
			
		</div>
</section>