<section class="module__about module__skills">
	
	<h2>Skills</h2>
	
	<h3>Summary</h3>
		
	<ul class="module__skill-summary">
	
	<?php while ( have_rows( 'skill_summary' ) ) : the_row(); ?>

	<?php $skill_summary_description = get_sub_field('skill_summary_description'); ?>

		<li class="module__skill-summary-item"><?php echo $skill_summary_description; ?></li>		
	
		<?php endwhile; ?>
		
	</ul>

	<div class="module__skills-wrapper">

		<?php while ( have_rows( 'skill_category' ) ) : the_row();

		$skill_category_icon = get_sub_field('skill_category_icon');
		$skill_category_name = get_sub_field('skill_category_name'); ?>
		
		<div class="module__skill-ctn">

			<img class="module__skill-category-icon" src="<?php echo $skill_category_icon['url']; ?>" alt="<?php echo $skill_category_icon['alt']; ?>">
			<h4 class="module__skill-category-name"><?php echo $skill_category_name; ?></h4>
			<ul class="module__skills">

				<?php while ( have_rows( 'skill_item' ) ) : the_row();
				
				$skill = get_sub_field('skill'); ?>

				<li class="module__skills-item"><?php echo $skill; ?></li>		
			
				<?php endwhile; ?>
				
			</ul>

		</div>

		<?php endwhile; ?>
	
	</div>
	
</section>