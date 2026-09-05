<?php
/**
 * Title: Lived experience
 * Slug: ideell/testimonial
 * Categories: ideell/sections
 * Description: Two or three short quotations from the people an organisation
 *              exists for.
 * Keywords: testimonial, quote, story, experience, voices, members
 * Inserter: yes
 *
 * Marked up as blockquote and cite rather than styled paragraphs, so a screen
 * reader announces these as quotations and the attribution is bound to the words
 * it belongs to. Attribute honestly: a first name and a year is enough, and
 * inventing testimonials for a charity is not a thing to do.
 *
 * @package Ideell
 */

$quotes = array(
	array(
		'quote' => __( 'Finding other people who had been through the same thing was the first moment any of it made sense.', 'ideell' ),
		'cite'  => __( 'Member since 2021', 'ideell' ),
	),
	array(
		'quote' => __( 'I rang the helpline not really knowing what to ask. They let me talk until I worked it out.', 'ideell' ),
		'cite'  => __( 'Helpline caller', 'ideell' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"is-style-section","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'In their words', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns">
<?php foreach ( $quotes as $q ) : ?>
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card ideell-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card ideell-card"><!-- wp:quote {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<blockquote class="wp-block-quote" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.15rem","lineHeight":"1.55","fontStyle":"italic","fontWeight":"400"}}} -->
<p style="font-size:1.15rem;font-style:italic;font-weight:400;line-height:1.55"><?php echo esc_html( $q['quote'] ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html( $q['cite'] ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
