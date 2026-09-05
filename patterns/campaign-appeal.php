<?php
/**
 * Title: Campaign appeal
 * Slug: ideell/campaign-appeal
 * Categories: ideell/cta
 * Description: A single fundraising appeal with a target, a progress bar and
 *              suggested amounts.
 * Keywords: campaign, appeal, fundraising, donate, target, progress, gift
 * Inserter: yes
 *
 * The progress bar is a native <progress> element inside an html block, because
 * no core block expresses one and a div faking a bar tells assistive technology
 * nothing. It carries its own label, and the same figures are written out in
 * text beside it: the bar is a picture of the number, never the only source of
 * it.
 *
 * Update the value and max by hand, or replace the whole thing with your
 * fundraising plugin's block.
 *
 * @package Ideell
 */

$amounts = array( '200', '500', '1000' );
?>
<!-- wp:group {"align":"full","className":"is-style-section","backgroundColor":"primary-tint","layout":{"type":"constrained","contentSize":"52rem"}} -->
<div class="wp-block-group alignfull is-style-section has-primary-tint-background-color has-background"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);font-size:0.9rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'This year\'s appeal', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Keep the helpline open', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Say what the money pays for and what happens without it. Be specific: one concrete thing beats an abstract mission statement.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="ideell-progress-label"><strong><?php echo esc_html__( '340,000 raised', 'ideell' ); ?></strong> <?php echo esc_html__( 'of a 500,000 target', 'ideell' ); ?></p>
<progress class="ideell-progress" max="500000" value="340000" aria-labelledby="ideell-appeal-target"></progress>
<span id="ideell-appeal-target" class="screen-reader-text"><?php echo esc_html__( 'Appeal progress towards the target', 'ideell' ); ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|10"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--10);font-size:1rem;font-weight:600"><?php echo esc_html__( 'Give a one-off gift', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons">
<?php foreach ( $amounts as $amount ) : ?>
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html( $amount ); ?></a></div>
<!-- /wp:button -->
<?php endforeach; ?>
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Another amount', 'ideell' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
