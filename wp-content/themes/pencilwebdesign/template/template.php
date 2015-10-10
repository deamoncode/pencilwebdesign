<?php
	/* Template Name: pwd_template_dynamic */

get_header('template'); ?>

	<?php include get_the_title( $ID ) . '.php';?>
   
<?php get_footer(); ?>