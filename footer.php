<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package echelon
 */

?>

<footer id="colophon" class="site-footer">
    <div class="wrap">
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'echelon' ) ); ?>">
                <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'echelon' ), 'WordPress' );
				?>
            </a>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>