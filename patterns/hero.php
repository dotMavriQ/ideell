<?php
/**
 * Title: Hero
 * Slug: ideell/hero
 * Categories: ideell/hero
 * Description: Full-width opening band with an eyebrow, headline, short lead
 *              and two calls to action.
 * Keywords: hero, intro, banner, opening, cta
 * Block Types: core/post-content
 * Inserter: yes
 *
 * @package Ideell
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-inverse","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section-inverse" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"44rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
<p style="font-size:0.9rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'Who we are', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 1.8rem + 2.8vw, 4rem)","lineHeight":"1.08"}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(2.5rem, 1.8rem + 2.8vw, 4rem);line-height:1.08"><?php echo esc_html__( 'Nobody should have to face this alone', 'ideell' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"clamp(1.05rem, 1rem + 0.4vw, 1.3rem)","lineHeight":"1.6"}}} -->
<p style="font-size:clamp(1.05rem, 1rem + 0.4vw, 1.3rem);line-height:1.6"><?php echo esc_html__( 'We bring together the people affected, the families around them and the professionals who care for them. Describe your organisation here in two sentences.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"base","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button" href="#"><?php echo esc_html__( 'Support our work', 'ideell' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Find support', 'ideell' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
