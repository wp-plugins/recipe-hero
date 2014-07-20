<?php
/**
 * Recipe Single Instructions
 *
 * @package   Recipe Hero
 * @author    Captain Theme <info@captaintheme.com>
 * @since 	  0.8.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;
$instructions = get_post_meta( $post->ID, '_recipe_hero_steps_group', true );

if ( $instructions ) { ?>

	<div class="recipe-single-instructions">

		<h4 class="instructions-heading"><?php _e( 'Instructions', 'recipe-hero' ); ?></h4>

		<ol class="steps-list" itemprop="recipeInstructions">

		<?php
		$intruction_count = 1;
		foreach ( ( array ) $instructions as $key => $instruction ) {

		    $instruction_text = $instruction_image = '';

		    if ( isset( $instruction['_recipe_hero_step_instruction'] ) ) {

		        $instruction_text = $instruction['_recipe_hero_step_instruction'];
		        
		    }

		    if ( isset( $instruction['_recipe_hero_step_image'] ) ) {

		    	if ( $instruction['_recipe_hero_step_image'] ) {
		    		
		    		$instruction_image = '<a href="' . $instruction['_recipe_hero_step_image'] . '" class="steps-image-link" title="' . __( 'Step', 'recipe-hero' ) . ' ' . $intruction_count . '"><img src="' . $instruction['_recipe_hero_step_image'] . '" class="step-image" /></a>';

		    	}

		  	} else {

		  		$instruction_image = '';

		  	}

		    echo '<li class="steps-item">';
			    echo wpautop( $instruction_text ) . ' ';
			    echo $instruction_image;
		    echo '</li>';

		    $intruction_count++;

		} ?>

		</ol>

	</div><!-- .recipe-single-ingredients -->

<?php
}