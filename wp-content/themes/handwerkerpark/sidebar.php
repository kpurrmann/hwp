<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<?php if (is_active_sidebar('sidebar-1')) : ?>
    <aside>
        <?php dynamic_sidebar('sidebar-1'); ?>

    </aside><!-- #secondary -->
<?php endif; ?>

<?php if (is_page(42)) : ?>
    <aside>
        <div class="inside-hidden">
            <?php dynamic_sidebar('mieter'); ?>
        </div>
    </aside>
<?php endif; ?>

