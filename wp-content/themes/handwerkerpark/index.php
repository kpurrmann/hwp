<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 *
 * @subpackage Handwerkerpark
 * @since 2012
 */
get_header();
?>

<section id="content">
    <article>
        <?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

        <?php endif; ?>
    </article>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
