<?php
/**
 * Title: Image and text
 * Slug: ideell/media-text
 * Categories: ideell/sections
 * Description: A photograph beside a block of text, for explaining one thing at
 *              a time down a page.
 * Keywords: media, image, text, photo, alternating, story
 * Inserter: yes
 *
 * The bundled image is a placeholder and is marked decorative. Replace it with a
 * real photograph and write real alt text: for an organisation whose readers are
 * often anxious, a genuine photograph of people does more than any amount of
 * copy, and stock photography is transparent to everyone.
 *
 * @package Ideell
 */

$placeholder = get_theme_file_uri( 'assets/images/placeholder.svg' );
?>
<!-- wp:group {"align":"full","className":"is-style-section","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section"><!-- wp:media-text {"mediaType":"image","mediaWidth":48,"verticalAlignment":"center","imageFill":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:48% auto;padding-top:0;padding-bottom:0"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( $placeholder ); ?>" alt="" width="1200" height="800"/></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Explain one thing at a time', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Use this section for the part of your work that needs a picture to make sense. Alternate the image left and right down the page so each section reads as its own idea rather than as one long wall.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Read more about this work', 'ideell' ); ?></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
