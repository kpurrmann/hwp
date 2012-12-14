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
        <title><?php wp_title('|', true, 'right'); ?></title>
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
                        <?php wp_nav_menu( array('menu' => 'Hauptnavigation' ) ); ?>
                    </nav>
                    <div id="teaser">
                        <div class="teaser-box box-notify">
                            <div class="teaser-box-content">
                                <h2>Lorem Ipsum</h2>
                                <p>Das ist ein Blind Text der so weiter geht...</p>
                            </div>
                        </div>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>
                    </div>
                </header>