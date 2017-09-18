<?php
if ( have_rows( 'education' ) ): ?>

<section class="module__about module__education">
	
	<h2>Education</h2>

	<?php while ( have_rows( 'education' ) ) : the_row();

	$degree = get_sub_field('degree');
	$school = get_sub_field('school');
	$education_period = get_sub_field('education_period');
	$education_details = get_sub_field('education_details'); ?>

	<div class="module__education-ctn">
		<h3 class="module__education-degree"><?php echo $degree; ?>,</h3>
		<span class="module__education-school"><?php echo $school; ?>,</span>
		<span class="module__education-period"><?php echo $education_period; ?></span>

		<!-- <div class="module__education-details"><?php echo $education_details; ?></div> -->
	</div>

	<?php endwhile; ?>

</section>

<?php endif; ?>