<?php
/**
 * Title: Support call to action
 * Slug: ideell/cta-support
 * Categories: ideell/cta
 * Description: Closing band inviting the reader to donate, join or volunteer.
 * Keywords: cta, donate, give, join, member, volunteer, support
 * Inserter: yes
 *
 * @package Ideell
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section","backgroundColor":"primary-tint","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"40rem"}} -->
<div class="wp-block-group alignfull is-style-section has-primary-tint-background-color has-background"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Stand with us', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.6"}}} -->
<p class="has-text-align-center" style="font-size:1.125rem;line-height:1.6"><?php echo esc_html__( 'Every membership and every gift keeps this work going. Join us, or give what you can.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Become a member', 'ideell' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Give a gift', 'ideell' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
