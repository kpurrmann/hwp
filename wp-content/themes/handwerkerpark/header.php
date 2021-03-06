<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Handwerkerpark
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title('|', true, 'right'); ?> Handwerkerpark</title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <section id="wrapper">
            <section id="page">
                <header>
                    <figure id="logo">
                        <a href="/" title="Zur Startseite">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo Handerwekerpark">
                        </a>
                    </figure>
                    <nav id="mainnavigation">
                        <?php wp_nav_menu( array('menu' => 'Mainnavigation' ) ); ?>
                    </nav>
                    <div id="teaser">
                        <?php if($teaser = get_post_custom_values('teaser')) :  ?>
                        <div class="teaser-box box-notify">
                            <div class="teaser-box-content">
                                <?php echo $teaser[0]; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <figure>
                            <?php $header_image = get_the_post_thumbnail();  ?>
                            <?php if($header_image) :  ?>
                            <?php the_post_thumbnail()  ?>
                            <?php else : ?>
                            <?php echo get_the_post_thumbnail(2)  ?>
                            <?php endif; ?>
                        </figure>
                    </div>
                </header>