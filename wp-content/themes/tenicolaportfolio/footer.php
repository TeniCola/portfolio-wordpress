<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */
?>

<!--//////////////////////////////// FOOTER ////////////////////////////////-->
        </div>
            <footer>
                <div>
                    <div>
                        <p>All Personal Characters, Designs, and Artwork &copy; Teniola Coker<br/>
                        Portfolio Handmade by Teniola Coker || Last Updated -- July 2018</p>
                    </div>
                    <section>
                        <?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
                    </section>
                </div>
            </footer>
        </main>
        <?php wp_footer(); ?>
    </body>
</html>