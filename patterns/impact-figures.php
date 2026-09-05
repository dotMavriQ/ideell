<?php
/**
 * Title: Impact figures
 * Slug: ideell/impact-figures
 * Categories: ideell/sections
 * Description: A band of three or four headline figures with short labels,
 *              for reporting reach, membership or money raised.
 * Keywords: impact, figures, statistics, numbers, results, annual report
 * Inserter: yes
 *
 * Each figure is a paragraph, not a heading, so the numbers do not enter the
 * document outline. A screen reader user hears the label with the number
 * rather than a run of decontextualised digits in the heading list.
 *
 * @package Ideell
 */

$figures = array(
	array(
		'value' => __( '4,200', 'ideell' ),
		'label' => __( 'members across the country', 'ideell' ),
	),
	array(
		'value' => __( '18,000', 'ideell' ),
		'label' => __( 'calls answered on the helpline', 'ideell' ),
	),
	array(
		'value' => __( '96%', 'ideell' ),
		'label' => __( 'of income spent on our work', 'ideell' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"is-style-section","backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section has-secondary-background-color has-background"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Last year in numbers', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns">
<?php foreach ( $figures as $figure ) : ?>
<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2.75rem, 2rem + 2.6vw, 3.75rem)","lineHeight":"1","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}},"color":{"text":"var:preset|color|primary"},"elements":{}},"fontFamily":"serif"} -->
<p class="has-text-align-center has-text-color has-serif-font-family" style="color:var(--wp--preset--color--primary);margin-bottom:var(--wp--preset--spacing--10);font-size:clamp(2.75rem, 2rem + 2.6vw, 3.75rem);font-weight:600;line-height:1"><?php echo esc_html( $figure['value'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="font-size:1rem;line-height:1.5"><?php echo esc_html( $figure['label'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
