<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
        $service_1 = get_field('service_1');
        $service_description_1 = get_field('service_description_1');
				$image_1 = get_field('image_1');
        $service_2 = get_field('service_2');
        $service_description_2 = get_field('service_description_2');
				$image_2 = get_field('image_2');
        $service_3 = get_field('service_3');
        $service_description_3 = get_field('service_description_3');
				$image_3 = get_field('image_3');
        $service_4 = get_field('service_4');
        $service_description_4 = get_field('service_description_4');
				$image_4 = get_field('image_4');
				$size = "full"; ?>

			<section class="service-container">
				<section class="service-text">
					<h2><?php the_title(); ?></h2>
					<?php echo $service_description; ?>
				</section> <!-- service-text -->

				<figure class="service-image">
					<?php echo wp_get_attachment_image($image, $size); ?>
				</figure> <!-- service-image -->
			</section>	<!-- service-container -->

			<?php endwhile; ?>
		</div>

	</div>

<?php get_footer(); ?>
