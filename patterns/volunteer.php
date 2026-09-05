<?php
/**
 * Title: Volunteer signup
 * Slug: ideell/volunteer
 * Categories: ideell/cta
 * Description: An invitation to volunteer, with a slot for an application form.
 * Keywords: volunteer, help, signup, apply, get involved
 * Inserter: yes
 *
 * A theme cannot process a submission, so this ships the layout and marks the
 * slot. Ask for as little as you can get away with: long forms lose volunteers.
 *
 * @package Ideell
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section","backgroundColor":"secondary-tint","layout":{"type":"constrained","contentSize":"44rem"}} -->
<div class="wp-block-group alignfull is-style-section has-secondary-tint-background-color has-background"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Volunteer with us', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Most of what we do is done by people who have been through it themselves. Tell us roughly how much time you have and what you would like to do.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Form slot. Delete this paragraph and insert the block from your form or mailing plugin. Every field needs a visible label, and say plainly what you will do with the address.', 'ideell' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
