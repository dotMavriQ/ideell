<?php
/**
 * Title: Hero with photograph
 * Slug: ideell/hero-image
 * Categories: ideell/hero
 * Description: Full-width photographic hero with an overlay, headline and two
 *              calls to action.
 * Keywords: hero, cover, image, photo, banner, intro
 * Block Types: core/post-content
 * Inserter: yes
 *
 * The overlay is at 60 percent for a reason: white text over an unknown
 * photograph is the most common way a well-meaning site fails contrast, and the
 * person replacing this placeholder will not re-check it. Keep the dim high
 * enough that any photograph they drop in still passes.
 *
 * @package Ideell
 */

$placeholder = get_theme_file_uri( 'assets/images/placeholder.svg' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","dimRatio":60,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":560,"align":"full","className":"is-style-section-inverse","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-cover alignfull is-style-section-inverse" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( $placeholder ); ?>" alt="" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 1.8rem + 2.8vw, 4rem)","lineHeight":"1.08"},"color":{"text":"#ffffff"}}} -->
<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:clamp(2.5rem, 1.8rem + 2.8vw, 4rem);line-height:1.08"><?php echo esc_html__( 'Nobody should have to face this alone', 'ideell' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"clamp(1.05rem, 1rem + 0.4vw, 1.3rem)","lineHeight":"1.6"},"color":{"text":"#ffffff"}}} -->
<p class="has-text-color" style="color:#ffffff;font-size:clamp(1.05rem, 1rem + 0.4vw, 1.3rem);line-height:1.6"><?php echo esc_html__( 'Replace this photograph with a real one of the people you work with, and write alt text that says what is happening in it.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"base","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button" href="#"><?php echo esc_html__( 'Support our work', 'ideell' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Find support', 'ideell' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
