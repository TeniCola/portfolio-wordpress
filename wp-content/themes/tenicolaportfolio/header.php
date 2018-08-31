<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 2.0
 */
?>
<!DOCTYPE html>
<!--//////////////////////////////// TENICOLA PERSONAL PORTFOLIO ////////////////////////////////-->
<html>
    <head>
        <title>
            Teniola Coker - TeniCola
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
<!--//////////////////////////////// HEADER ////////////////////////////////-->
        <header>
            <div class="full-width">
                <div class="half-width">
                    <a href="<?php echo site_url(); ?>"><h1>Teniola Coker</h1></a>
                </div>
                <div class="half-width">
                    <h2>Designer, Developer, &amp; Visual Storytelller</h2> <!--"Illustrator, Designer, &amp; Visual Storytelller"-->
                </div>
            </div>
        </header>
<!--//////////////////////////////// FRAME ////////////////////////////////-->
        <main>
            <div class="frame">
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'nav-menu' ) ); ?>
                </nav>
