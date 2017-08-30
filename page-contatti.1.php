<?php 
/**
 * 	Template Name: Template-Contatti
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>

	<?php if ( have_posts() ) : 
		// Do we have any posts/pages in the databse that match our query?
		?>

			<?php while ( have_posts() ) : the_post(); 
			// If we have a page to show, start a loop that will display it
			?>
				
			<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

		<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
			<article class="post error">
				<h1 class="404">Nothing has been posted like that yet</h1>
			</article>

	<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>



<?php get_footer(); // This fxn gets the footer.php file and renders it ?>