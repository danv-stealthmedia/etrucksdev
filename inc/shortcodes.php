<?php
	function etrucks_recentposts($atts){
		$html = "";
		$count = 0;
		$post = new WP_Query('cat=7&posts_per_page=5&post_type=post');

		$indicator_html = '<ol class="carousel-indicators">';
		$html .= '<div class="carousel-inner">';

		while($post->have_posts()) : $post->the_post();
			$count++;
			if($count == 1){
				$indicator_html .= '<li data-target="#etrucksrecentpostsCarousel" data-slide-to="'.($count-1).'" class="active"></li>';
				$html .= '<div class="carousel-item active">';
				$html .= '<div class="row no-gutters">';
				$html .= '<div class="col-lg-5" data-aos="fade-right"  data-aos-duration="3000">';
				$html .= '<h3>'.get_the_title()."</h3>";
				$html .= '<p>'.get_the_excerpt()."</p>";
							//$html .= '<a href="'.get_permalink().'"  class="btn btn-secondary understrap-read-more-link">Read More</a>';
				$html .= '</div>';
				$html .= '<div class="col-lg-7" data-aos="fade-left"  data-aos-duration="3000">'. get_the_post_thumbnail($post->ID, 'large').'</div>';
				$html .= '</div>';
				$html .= '</div>';
			}else{
				$indicator_html .= '<li data-target="#etrucksrecentpostsCarousel" data-slide-to="'.($count-1).'"></li>';
				$html .= '<div class="carousel-item">';
				$html .= '<div class="row no-gutters">';
				$html .= '<div class="col-lg-5">';
				$html .= '<h3>'.get_the_title()."</h3>";
				$html .= '<p>'.get_the_excerpt()."</p>";
				$html .= '</div>';
				$html .= '<div class="col-lg-7">'. get_the_post_thumbnail($post->ID, 'large').'</div>';
				$html .= '</div>';
				$html .= '</div>';
			}
		endwhile;

		$html .= '</div><!-- .carousel-inner -->';
		$indicator_html .= '</ol><!-- .carousel-indicators -->';

		$html = "<!-- Indicators -->". $indicator_html . "<!-- Wrapper for slides -->".$html;

		wp_reset_query();

		// Output needs to be return
		return $html;
	}

	add_shortcode('etrucks-recentposts','etrucks_recentposts');
	function etrucks_reviews($atts){
		$html = "";
		$count = 0;
		$post = new WP_Query('cat=7&posts_per_page=5&post_type=customer_review');

		$indicator_html = '<ol class="carousel-indicators">';
		$html .= '<div class="carousel-inner">';

		while($post->have_posts()) : $post->the_post();
			$count++;
			$companyName=get_field('company_name');
			$location=get_field('location');
			if($count == 1){
				$indicator_html .= '<li data-target="#etrucksreviewsCarousel" data-slide-to="'.($count-1).'" class="active"></li>';
				$html .= '<div class="carousel-item active">';
				$html .= '<div class="row no-gutters">';
				$html .= '<div class="col-lg-12 review-content">';
				$html .= '<p class="review-content">'.get_the_excerpt()."</p>";
				$html .= '<h4 class="customer-name">'.get_the_title()."</h4>";
				$html .= '<p class="company-name">'.$companyName."</p>";
				$html .= '<p class="company-location">'.$location."</p>";
							//$html .= '<a href="'.get_permalink().'"  class="btn btn-secondary understrap-read-more-link">Read More</a>';
				$html .= '</div>';
							$html .= '</div>';
				$html .= '</div>';
			}else{
				$indicator_html .= '<li data-target="#etrucksreviewsCarousel" data-slide-to="'.($count-1).'"></li>';
				$html .= '<div class="carousel-item">';
				$html .= '<div class="row no-gutters">';
				$html .= '<div class="col-lg-12 review-content">';
				$html .= '<p class="review-content">'.get_the_excerpt()."</p>";
				$html .= '<h4 class="customer-name">'.get_the_title()."</h4>";
				$html .= '<p class="company-name">'.$companyName."</p>";
				$html .= '<p class="company-location">'.$location."</p>";
								$html .= '</div>';
					$html .= '</div>';
				$html .= '</div>';
			}
		endwhile;

		$html .= '</div><!-- .carousel-inner -->';
		$indicator_html .= '</ol><!-- .carousel-indicators -->';

		$html = "<!-- Indicators -->". $indicator_html . "<!-- Wrapper for slides -->".$html;

		wp_reset_query();

		// Output needs to be return
		return $html;
	}

	add_shortcode('etrucks-reviews','etrucks_reviews');
	function etruckshome_reviews($atts){
		$html = "";
		$count = 0;
		$post = new WP_Query('cat=8&posts_per_page=5&post_type=customer_review');

		//$indicator_html = '<ol class="carousel-indicators">';
		$html .= '<div class="carousel-inner">';

		while($post->have_posts()) : $post->the_post();
			$count++;
			$companyName=get_field('company_name');
			$location=get_field('location');
			if($count == 1){
				//$indicator_html .= '<li data-target="#etruckshomereviewsCarousel" data-slide-to="'.($count-1).'" class="active"></li>';
				$html .= '<div class="carousel-item active">';
				$html .= '<div class="row no-gutters">';
				$html .= '<div class="review-content">';
				$html .= '<p class="review-content">'.get_the_excerpt()."</p>";
				$html .= '<h4 class="customer-name">'.get_the_title()."</h4>";
				$html .= '<p class="company-name">'.$companyName."</p>";
				//$html .= '<p class="company-location">'.$location."</p>";
				//$html .= '<a href="'.get_permalink().'"  class="btn btn-secondary understrap-read-more-link">Read More</a>';
				$html .= '</div>';
				$html .= '</div>';
				$html .= '</div>';
			}else{
			//	$indicator_html .= '<li data-target="#etruckshomereviewsCarousel" data-slide-to="'.($count-1).'"></li>';
				$html .= '<div class="carousel-item">';
				$html .= '<div class="row no-gutters">';
				$html .= '<div class="review-content">';
				$html .= '<p class="review-content">'.get_the_excerpt()."</p>";
				$html .= '<h4 class="customer-name">'.get_the_title()."</h4>";
				$html .= '<p class="company-name">'.$companyName."</p>";
				//$html .= '<p class="company-location">'.$location."</p>";
				$html .= '</div>';
				$html .= '</div>';
				$html .= '</div>';
			}
		endwhile;

		$html .= '</div><!-- .carousel-inner -->';
		//$indicator_html .= '</ol><!-- .carousel-indicators -->';

		//$html = "<!-- Indicators -->". $indicator_html . "<!-- Wrapper for slides -->".$html;

		wp_reset_query();

		// Output needs to be return
		return $html;
	}

	add_shortcode('etruckshome-reviews','etruckshome_reviews');
