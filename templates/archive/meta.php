<?php
/**
 * Recipe Archive Meta
 *
 * @package   Recipe Hero
 * @author    Captain Theme <info@captaintheme.com>
 * @since 	  0.8.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$date = get_the_date();

?>

<div class="recipe-archive-meta">

	<div class="date">
		<span class="dashicons dashicons-clock"></span> <?php echo $date; ?>
	</div>

	<div class="author">
		<span class="dashicons dashicons-admin-users"></span> <?php echo the_author_posts_link(); ?>
	</div>

	<div class="comments-link">
		<span class="dashicons dashicons-testimonial"></span> <a href="#comments"><?php comments_number( __( '0 Comments', 'recipe-hero' ), __( '1 Comment', 'recipe-hero' ), __( '% Comments', 'recipe-hero' ) ); ?></a>
	</div>

	<?php if ( get_edit_post_link() ) { ?>

		<div class="edit-link">
			<span class="dashicons dashicons-welcome-write-blog"></span> <?php edit_post_link( __( 'Edit Recipe', 'recipe-hero' )); ?>
		</div>
		
	<?php } ?>

</div>