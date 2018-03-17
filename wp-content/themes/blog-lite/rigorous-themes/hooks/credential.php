<?php
/**
 * The slider hook for our theme.
 *
 * This is the template that displays slider of the theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Lite
 */

if ( ! function_exists( 'blog_lite_powerby' ) ) :

    function blog_lite_powerby(){

    $theme_options  = blog_lite_theme_options();      
   
    ?> 

    <div id="copyright">
        <p><?php echo esc_attr( $theme_options['copyright'] ); ?>. <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'blog-lite' ), 'Blog Lite', '<a href="http://rigorousthemes.com/" rel="designer" target="_blank">Rigorous Themes</a>' ); ?></p>
    </div>
        

    <?php }

endif;

add_action( 'blog_lite_copyright', 'blog_lite_powerby', 10 );