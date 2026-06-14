<?php
/**
 * Title: Hero Section
 * Slug: dr-mike-theme/hero
 * Categories: dr-mike-theme, banner
 */
?>
<!-- wp:cover {"url":"<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg","dimRatio":20,"overlayColor":"secondary","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"150px","bottom":"150px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:150px;padding-bottom:150px"><img class="wp-block-cover__image-background" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1100px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"5rem","lineHeight":"1","fontWeight":"700"}},"textColor":"background"} -->
		<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:5rem;font-weight:700;line-height:1">Expert Orthopaedic Care for <br>Your Hip and Knee Health</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.3rem"},"spacing":{"margin":{"top":"40px","bottom":"50px"}}},"textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color" style="font-size:1.3rem;margin-top:40px;margin-bottom:50px">Dr. Mike Terreblanche is a specialist orthopaedic surgeon in Cape Town with a focus on hip and knee surgery, <br>including knee replacement surgery, hip replacement surgery, arthroscopic knee surgery and robotic-assisted <br>joint replacement planning.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"accent","style":{"border":{"radius":"35px"},"spacing":{"padding":{"top":"15px","right":"45px","bottom":"15px","left":"45px"}},"typography":{"fontWeight":"600"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button" style="border-radius:35px;font-weight:600;padding-top:15px;padding-right:45px;padding-bottom:15px;padding-left:45px">Book A Consultation</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"style":{"border":{"radius":"35px","width":"2px","style":"solid"},"spacing":{"padding":{"top":"15px","right":"45px","bottom":"15px","left":"45px"}},"typography":{"fontWeight":"600"}},"className":"is-style-outline","textColor":"background"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" style="border-radius:35px;border-style:solid;border-width:2px;font-weight:600;padding-top:15px;padding-right:45px;padding-bottom:15px;padding-left:45px">About Us</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
