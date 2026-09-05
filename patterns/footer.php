<?php
/**
 * Title: Footer
 * Slug: ideell/footer
 * Categories: ideell/footer
 * Description: Four-column footer carrying the organisation block, two link
 *              columns and contact details, over a legal strip.
 * Keywords: footer, organisation, contact, legal, social
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * Nonprofits are held to a disclosure standard ordinary sites are not: a
 * registered name, an organisation number and a real contact route are expected
 * to be reachable from every page. The organisation block exists so that
 * information has an obvious home instead of being bolted on later.
 *
 * @package Ideell
 */

?>
<!-- wp:group {"tagName":"div","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained","wideSize":"75rem"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:site-title {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.25rem"},"elements":{"link":{"color":{"text":"var:preset|color|base"},"typography":{"textDecoration":"none"}}}}} /-->

<!-- wp:site-tagline {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30)"></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
<h2 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1rem"><?php echo esc_html_x( 'Explore', 'footer column heading', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:page-list {"style":{"typography":{"fontSize":"0.95rem"},"spacing":{"blockGap":"var:preset|spacing|10"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
<h2 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1rem"><?php echo esc_html_x( 'Get involved', 'footer column heading', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"ideell-linklist","style":{"typography":{"fontSize":"0.95rem"},"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<ul class="wp-block-list ideell-linklist" style="font-size:0.95rem"><!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Become a member', 'ideell' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Give a gift', 'ideell' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Volunteer with us', 'ideell' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Fundraise', 'ideell' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
<h2 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1rem"><?php echo esc_html_x( 'Contact', 'footer column heading', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.7"}}} -->
<p style="font-size:0.95rem;line-height:1.7"><?php echo esc_html__( 'Registered name of the organisation', 'ideell' ); ?><br><?php echo esc_html__( 'Street address', 'ideell' ); ?><br><?php echo esc_html__( 'Postcode and city', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.7"}}} -->
<p style="font-size:0.95rem;line-height:1.7"><?php echo esc_html__( 'Organisation number: 000000-0000', 'ideell' ); ?><br><a href="mailto:"><?php echo esc_html__( 'hello@example.org', 'ideell' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30"}},"color":{"background":"#ffffff"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff;color:#ffffff;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}}} -->
<p style="font-size:0.85rem"><?php
	printf(
		/* translators: %s: current year. */
		esc_html__( '© %s. All rights reserved.', 'ideell' ),
		esc_html( gmdate( 'Y' ) )
	);
	?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}}} -->
<p style="font-size:0.85rem"><a href="#"><?php echo esc_html__( 'Privacy policy', 'ideell' ); ?></a> · <a href="#"><?php echo esc_html__( 'Accessibility statement', 'ideell' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
