<?php
/**
 * Title: Newsletter signup
 * Slug: ideell/newsletter
 * Categories: ideell/cta
 * Description: An invitation to subscribe, with a slot for a mailing list block.
 * Keywords: newsletter, signup, subscribe, email, mailing list
 * Inserter: yes
 *
 * A theme cannot process a submission, so this ships the layout and marks the
 * slot. Consent belongs to the plugin, but the honesty belongs here: say how often you write.
 *
 * @package Ideell
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section","backgroundColor":"secondary-tint","layout":{"type":"constrained","contentSize":"44rem"}} -->
<div class="wp-block-group alignfull is-style-section has-secondary-tint-background-color has-background"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Keep in touch', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A few times a year we write about what we have been doing, what we are campaigning on, and how to get involved. No more often than that.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Form slot. Delete this paragraph and insert the block from your form or mailing plugin. Every field needs a visible label, and say plainly what you will do with the address.', 'ideell' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
