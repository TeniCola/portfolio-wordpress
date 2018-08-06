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
        <!-- <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Nova+Slim" rel="stylesheet" type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type='text/css'>
        <?php wp_head(); ?>
    </head>
    <body>
<!--//////////////////////////////// HEADER ////////////////////////////////-->
        <header>
            <div class="full-width">
                <div class="half-width">
                    <a href="index.html"><h1>Teniola Coker</h1></a>
                </div>
                <div class="half-width">
                    <h2>Illustrator, Designer, &amp; Visual Storytelller</h2>
                </div>
            </div>
        </header>
<!--//////////////////////////////// FRAME ////////////////////////////////-->
        <main>
            <div class="frame">
                <nav>
                    <p><a href="illustrations/index.html">Illustrations</a></p>
                    <p><a href="comics/index.html">Comics</a></p>
                    <p><a href="designs/index.html">Designs</a></p>
                    <p><a href="projects/index.html">Projects</a></p>
                    <p><a href="about/index.html">About</a></p>
                </nav>
