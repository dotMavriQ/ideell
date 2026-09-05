<?php
/**
 * Title: Contact and support routes
 * Slug: ideell/contact
 * Categories: ideell/pages
 * Description: Ways to reach the organisation, beside a slot for a contact form
 *              from whichever form plugin the site uses.
 * Keywords: contact, form, email, phone, helpline, support, address
 * Inserter: yes
 *
 * A theme cannot process a form submission, and a theme that ships its own form
 * handler would be rejected from the theme directory and would be the wrong
 * place for it anyway. So this ships the surrounding layout and marks the slot.
 * Delete the placeholder paragraph and insert your form plugin's block.
 *
 * The direct routes are listed first on purpose. Someone who needs to speak to a
 * person now should not have to fill in a form to find the number.
 *
 * @package Ideell
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section"><!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Talk to us', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'If you would rather speak to someone directly, use one of these. We answer every message, though it can take a few days.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.05rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.05rem"><?php echo esc_html__( 'Helpline', 'ideell' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="tel:"><?php echo esc_html__( '000 000 00 00', 'ideell' ); ?></a><br><?php echo esc_html__( 'Weekdays, 9am to 4pm', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.05rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.05rem"><?php echo esc_html__( 'Email', 'ideell' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="mailto:"><?php echo esc_html__( 'hello@example.org', 'ideell' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.05rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.05rem"><?php echo esc_html__( 'Post', 'ideell' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Registered name of the organisation', 'ideell' ); ?><br><?php echo esc_html__( 'Street address', 'ideell' ); ?><br><?php echo esc_html__( 'Postcode and city', 'ideell' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card-outline","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card-outline"><!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.4rem"},"spacing":{"margin":{"top":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0;font-size:1.4rem"><?php echo esc_html__( 'Send us a message', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Insert your form block here"} -->
<p><?php echo esc_html__( 'Form slot. Delete this paragraph and insert the block from your form plugin. Label every field visibly, do not rely on placeholder text as a label, and say what you will do with the data.', 'ideell' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
