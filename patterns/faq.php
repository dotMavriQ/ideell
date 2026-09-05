<?php
/**
 * Title: Frequently asked questions
 * Slug: ideell/faq
 * Categories: ideell/sections
 * Description: Questions and answers in a native accordion.
 * Keywords: faq, questions, answers, accordion, help, support
 * Inserter: yes
 *
 * Uses core/accordion rather than a stack of core/details. Core handles the
 * keyboard interaction, the expanded/collapsed state and the ARIA wiring, which
 * is exactly the sort of thing a theme should not be reimplementing.
 *
 * @package Ideell
 */

$faqs = array(
	array(
		'q' => __( 'How do I become a member?', 'ideell' ),
		'a' => __( 'Describe how someone joins, what it costs, and what a membership gives them.', 'ideell' ),
	),
	array(
		'q' => __( 'Where does my donation go?', 'ideell' ),
		'a' => __( 'Say plainly how money is spent. People give more readily when the answer is specific.', 'ideell' ),
	),
	array(
		'q' => __( 'Can I speak to someone who has been through this?', 'ideell' ),
		'a' => __( 'Explain how peer support works, who answers, and how long a reply usually takes.', 'ideell' ),
	),
	array(
		'q' => __( 'How can I help if I cannot give money?', 'ideell' ),
		'a' => __( 'List the practical alternatives: volunteering, sharing your story, fundraising, lending skills.', 'ideell' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"is-style-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Frequently asked questions', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:accordion {"headingLevel":3,"autoclose":false} -->
<div class="wp-block-accordion">
<?php foreach ( $faqs as $faq ) : ?>
<!-- wp:accordion-item -->
<div class="wp-block-accordion-item"><!-- wp:accordion-heading {"title":"<?php echo esc_attr( $faq['q'] ); ?>","level":3} -->
<h3 class="wp-block-accordion-heading"><?php echo esc_html( $faq['q'] ); ?></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel -->
<div class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p><?php echo esc_html( $faq['a'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->
<?php endforeach; ?>
</div>
<!-- /wp:accordion --></div>
<!-- /wp:group -->
