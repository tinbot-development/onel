<?php

if( have_rows('logo_grid_content') ) : ?>
	<div class="row clients">
		<?php while( have_rows('logo_grid_content') ) : the_row();
						$image = get_sub_field('logo'); 
						$alt = $image['alt'];
						$imageUrl = $image['sizes'][ 'large' ];
		?>
			<aside class="col-sm-6 col-md-4 logo-grid-content" >
					<a href="<?php the_sub_field('logo_url'); ?>">
					<div class="img-holder" style="background:url(<?php echo $imageUrl; ?>) center center no-repeat; height: 100%; width:100%;">				
					</div>
				 </a>
			</aside>
		<?php endwhile; ?>
	</div>
<?php endif; ?>