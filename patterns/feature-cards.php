<?php
/**
 * Title: Three feature cards
 * Slug: ideell/feature-cards
 * Categories: ideell/sections
 * Description: Section heading over three equal-height cards describing what
 *              the organisation does.
 * Keywords: cards, columns, programmes, services, three, grid
 * Inserter: yes
 *
 * @package Ideell
 */

$cards = array(
	array(
		'title' => __( 'Support', 'ideell' ),
		'body'  => __( 'Peer support for the people affected and for those closest to them, through the whole course of it.', 'ideell' ),
	),
	array(
		'title' => __( 'Knowledge', 'ideell' ),
		'body'  => __( 'Plain, reliable information written for patients and families, not only for clinicians.', 'ideell' ),
	),
	array(
		'title' => __( 'Advocacy', 'ideell' ),
		'body'  => __( 'A collective voice pressing for better care, built by the people who have been through it.', 'ideell' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"is-style-section","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'What we do', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns">
<?php foreach ( $cards as $card ) : ?>
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card ideell-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card ideell-card"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.375rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.375rem"><?php echo esc_html( $card['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $card['body'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
