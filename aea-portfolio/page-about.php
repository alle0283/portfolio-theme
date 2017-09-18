<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="page-content">
	
	<?php echo the_content(); ?>

	<div class="about__module-wrapper">

	<?php if ( have_rows( 'about_modules' ) ):

		while ( have_rows( 'about_modules' ) ) : the_row();
			
			if( get_row_layout() == 'about_me' ):
				include get_template_directory() . '/inc/module-aboutme.php';
			elseif ( get_row_layout() == 'skills' ):
				include get_template_directory() . '/inc/module-skills.php';
			elseif ( get_row_layout() == 'experience_module' ):
				include get_template_directory() . '/inc/module-experience.php';
			elseif ( get_row_layout() == 'volunteer_experience_module' ):
				include get_template_directory() . '/inc/module-volunteering.php';
			elseif ( get_row_layout() == 'education_module' ):
				include get_template_directory() . '/inc/module-education.php';
			elseif ( get_row_layout() == 'personal_interests' ):
				include get_template_directory() . '/inc/module-personal-interests.php';
			endif;

		endwhile;

	endif;
	?>

	</div>

</div>

<?php get_footer(); ?>
