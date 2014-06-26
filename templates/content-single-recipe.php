<?php

	 do_action( 'recipe_here_before_single_recipe' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
	 
?>

<article itemscope itemtype="http://scheme.org/Recipe" id="recipe-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php do_action( 'recipe_hero_single_recipe_content') ?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</article>

<?php do_action( 'recipe_hero_after_single_recipe' ); ?>