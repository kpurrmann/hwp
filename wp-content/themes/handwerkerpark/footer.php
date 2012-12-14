<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Handwerkerpark
 */
?>
</section>
<footer>
    <nav id="footernavigation">
       <?php wp_nav_menu( array('menu' => 'Footernavigation' ) ); ?>
    </nav>
</footer>
</section>
<?php wp_print_scripts(); ?>
</body>
</html>