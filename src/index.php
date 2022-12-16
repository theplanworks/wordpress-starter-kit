<?php
/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage Main Template
 * @since Main Template 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'class-name' ); ?>>

<!-- Page Content -->
<div class="page-content">
	<noscript style="display:block; padding:1rem; text-align: right;">The page requires JavaScript to be enabled.</noscript>
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
		// Include the page content template.
		the_content();
		// End of the loop.
	endwhile;
	?>
</div>

<?php wp_footer(); ?>

</body>
</html>