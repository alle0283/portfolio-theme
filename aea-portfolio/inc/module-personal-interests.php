<?php

if ( have_rows( 'personal_interests' ) ): ?>

<section class="module__personal-interests">

	<?php while ( have_rows( 'personal_interests' ) ) : the_row();

	$personal_interest = get_sub_field('personal_interest'); ?>

	<h1 class="module__personal-interest-item"><?php echo $personal_interest; ?></h1>

	<?php endwhile; ?>

</section>

<?php endif; ?>