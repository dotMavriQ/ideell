<?php
/**
 * Title: Header
 * Slug: ideell/header
 * Categories: ideell/header
 * Description: Site header with the logo, title, primary navigation and a
 *              single prominent supporter call to action.
 * Keywords: header, logo, navigation, menu, donate
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * The support button is the one element every nonprofit header needs and most
 * generic themes omit. It is an ordinary core/button, so editors can relabel,
 * relink or delete it without touching code.
 *
 * @package Ideell
 */

?>
<!-- wp:group {"tagName":"div","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained","wideSize":"75rem"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":48} /-->

<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.125rem","lineHeight":"1.25"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},"typography":{"textDecoration":"none"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /-->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"1.15rem","right":"1.15rem"}},"typography":{"fontSize":"0.95rem"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:0.6rem;padding-right:1.15rem;padding-bottom:0.6rem;padding-left:1.15rem;font-size:0.95rem"><?php echo esc_html_x( 'Support us', 'header call to action', 'ideell' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
