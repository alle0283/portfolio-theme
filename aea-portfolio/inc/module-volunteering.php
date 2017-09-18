<?php

if ( have_rows( 'volunteering' ) ): ?>

<section class="module__about module__volunteering">
	
	<h2>Volunteer Experience</h2>

	<?php while ( have_rows( 'volunteering' ) ) : the_row();

	$volunteer_position = get_sub_field('volunteer_position');
	$volunteer_organization = get_sub_field('volunteer_organization');
	$volunteer_period = get_sub_field('volunteering_period');
	$volunteer_details = get_sub_field('volunteer_details'); ?>

	<h3 class="module__volunteer-position"><?php echo $volunteer_position; ?></h3>
	<div class="module__volunteer-organization"><?php echo $volunteer_organization; ?></div>
	<div class="module__volunteer-period"><?php echo $volunteer_period; ?></div>
	<div class="module__volunteer-details"><?php echo $volunteer_details; ?></div>

	<?php endwhile; ?>

</section>

<?php endif; ?>