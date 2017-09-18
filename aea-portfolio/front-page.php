<?php get_header(); ?>

<div class="page-content">

	<div class="portfolio-wrapper">

	<?php 
	$args = array( 'post_type' => 'Portfolio Items', 'posts_per_page' => 10, 'order' =>'ASC', 'orderby' => 'menu_order' );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
		<div class="portfolio_portfolio-card-ctn">
			  <div class="portfolio-card">
		      <a href="<?php echo get_field('portfolio_item_link'); ?>" target="_blank">
			      <div class="portfolio-card__image-wrapper">
				      <div class="portfolio-card__image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>)">
				      </div>
			      </div>
		      </a>

		      <div class="card-content">

				<?php 
				if ( get_the_category() ) {
					echo '<div class="portfolio-card__categories">';
					foreach((get_the_category()) as $category) {
					 echo $category->cat_name . ' ';
					 }
					 echo '</div>';
				}
				?>
				<h4 class="portfolio-card__name"><a href="<?php echo get_field('portfolio_item_link') ?>" target="_blank"><?php the_title(); ?></a></h4>
				<div class="portfolio-card__description"><?php the_content(); ?></div>
				
				<?php
				if ( get_the_tags() ) {
				echo '<div class="portfolio-card__tags"><p><strong>Tags: </strong>';
				  foreach( get_the_tags() as $tag ) {
				    echo $tag->name . ' '; 
				  }
				echo '</p></div>';
				}
				?>

		      </div>

		      <div class="portfolio-card__completion clearfix">
		          <div class="portfolio-card__completion--large-text"><?php echo the_field('portfolio_item_date'); ?></div>
		          <div class="portfolio-card__completion--small-text">Completion Date</div>
		      </div>

		    </div> <!-- end portfolio-card -->
		  
		</div> <!-- end container --> 

		<?php wp_reset_query(); ?>

	<?php endwhile; ?>


	</div> <!-- end portfolio wrapper -->

</div>

<?php get_footer(); ?>