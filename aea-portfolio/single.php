<?php get_header(); ?>

<div class="page-content">

<a href="../../your-terminal">Back to All Courses</a>

<?php echo the_content(); ?>


<?php
global $post;
$parent_courses = get_pages( array(
    'post_type'    => 'courses',
    'parent'       => 0
) );

$parent_courses_ids = array();

foreach ( $parent_courses as $parent_course ) {
    $parent_courses_ids[] = $parent_course->ID;
}

$child_courses = get_pages( array(
    'post_type'    => 'courses',
    'exclude'      => $parent_courses_ids,
    'hierarchical' => false
) );


if ( $post->post_parent ) : ?>
<!-- This is a child-page. -->

<?php elseif ( count( $parent_courses_ids ) > 0 ) : ?>
<!-- This is a parent-page (with one or more children) -->
<h3>Month One</h3>
<h3>Month Two</h3>
<h3>Month Three</h3>



<?php

$args = array(
    'post_type'      => 'courses',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

        <?php $month = get_field('month'); ?>

		<?php echo the_title(); ?>


    <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>



<?php else : ?>
<!-- This is a parent page without children. -->

<?php endif; ?>

</div>

<?php get_footer(); ?>
