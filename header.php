<!doctype html>
<html lang="en">
<head>
	<title>Give The Drummer Some</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body>

<!--============== set variables =================-->
<?php 
	$background_texture = wp_get_actual_attachment_image_src(get_field('background_texture'), 'full');
	$background_blend = get_field (strtolower('background_blend'));
	$background_colour = get_field('background_colour');

	$background_after_texture = wp_get_actual_attachment_image_src(get_field('background_after_texture'), 'full');
	$background_after_blend = get_field (strtolower ('background_after_blend'));
	$background_after_opacity = get_field('background_after_opacity');

	$drummer = wp_get_actual_attachment_image_src(get_field('drummer'), 'full');
	$drummer_blend = get_field (strtolower('drummer_blend'));
	$drummer_opacity = get_field('drummer_opacity');
	
	$drummer_before = wp_get_actual_attachment_image_src(get_field('drummer_before'), 'full');
	$drummer_before_blend = get_field (strtolower('drummer_before_blend'));
	$drummer_before_opacity = get_field('drummer_before_opacity');

	$drummer_after = wp_get_actual_attachment_image_src(get_field('drummer_after'), 'full');
	$drummer_after_blend = get_field (strtolower('drummer_after_blend'));
	$drummer_after_opacity = get_field('drummer_after_opacity');


	$drummer_supp = wp_get_actual_attachment_image_src(get_field('drummer_supplementary_graphic'), 'full');
	$drummer_supp_blend = get_field(strtolower('drummer_supplementary_blend'));
	$drummer_supp_rotate = get_field('drummer_supplementary_rotate');
	$drummer_supp_opacity = get_field('drummer_supplemantary_opacity');

	$header_h_one = get_field('h_one');
	$header_title_colour = get_field('title_colour');

	$bottom_border = wp_get_actual_attachment_image_src(get_field('bottom_border'), 'full');
?>
<!--============== end variables =================-->

	<div id="container">
		
		<header>
<!--===================== header backgrounds ========================-->
			<style>

				header {
					background-blend-mode: <?php echo $background_blend ?>;
					background-color: <?php echo $background_colour; ?>;
				}

				header:before {
					background-image: url('<?php echo $background_texture ?>');
				}

				header:after {
					background-image: url('<?php echo $background_after_texture?>'); 
					mix-blend-mode: <?php echo $background_after_blend ?>;
					opacity: <?php echo $background_after_opacity; ?>;
				}
			</style>
			<!-- close header background-->

<!--========================== titling ================================-->

			<div class="type-block">
				<h1>
					<style>
						.give, 
						.the, 
						.some {
							color: <?php echo $header_h_one; ?>;	
						}

						.drummer {
							color: <?php echo $header_title_colour; ?>;	
						}
					</style>

					<span class="give">give</span>
					<span class="the">the</span><br /><br /> 
					<span class="drummer">drummer</span><br />
					<span class="some">some!</span>
				</h1>
			</div>

<!--========================= drummer image ==========================-->			

			<div class="drummer-container">

<!--+++++++++++++++++++++++++++++ sine-wave ++++++++++++++++++++++++++++-->	
				<figure  class="sine-wave">
					<img src="<?php echo $drummer_supp; ?>">
						<style>
							.sine-wave {
								transform: rotate(<?php the_field('drummer_supplementary_rotate'); ?>deg);
								mix-blend-mode: <?php echo $drummer_supp_blend ?>;
								opacity: <?php echo $drummer_supp_opacity ?>;
							}
						</style>
				</figure>

<!--++++++++++++++++++++++++++++++ drummer +++++++++++++++++++++++++++++-->	

				<figure class="drummer-image">
					<style>
						.drummer-image {
							background-image: url('<?php echo $drummer?>');
							mix-blend-mode: <?php echo $drummer_blend; ?>; 
							opacity: <?php echo $drummer_opacity; ?>;
						}

						.drummer-image:before {
							background-image: url('<?php echo $drummer_before?>'); 
							mix-blend-mode: <?php echo $drummer_before_blend; ?>; 
							opacity: <?php echo $drummer_before_opacity; ?>;
						}
						
						.drummer-image:after {
							background-image: url('<?php echo $drummer_after?>');
							mix-blend-mode: <?php echo $drummer_after_blend; ?>; 
							opacity: <?php echo $drummer_after_opacity; ?>;
						}
					</style>
				</figure>
			</div>

<!--================================ tat =============================== -->			

			<img src="<?php echo $bottom_border?>" class="bottom-border">
			<style>
				.bottom-border {
					mix-blend-mode: <?php echo strtolower(get_field('bottom_border_blend')); ?>; 
				}	
			</style>
		</header>
	
	</div><!-- container closing div-->




	
	






