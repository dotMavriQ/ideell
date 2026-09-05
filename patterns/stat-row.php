<?php
/**
 * Title: Statistics row
 * Slug: ideell/stat-row
 * Categories: ideell/sections
 * Description: A compact inline row of figures, for placing inside a page rather
 *              than as a full band.
 * Keywords: statistics, figures, numbers, impact, facts, row
 * Inserter: yes
 *
 * The quieter sibling of the impact figures band, for pages that already have a
 * coloured section and do not need another one.
 *
 * @package Ideell
 */

$figures = array(
	array( 'value' => __( '1974', 'ideell' ), 'label' => __( 'the year we were founded', 'ideell' ) ),
	array( 'value' => __( '6', 'ideell' ), 'label' => __( 'regional groups', 'ideell' ) ),
	array( 'value' => __( '40+', 'ideell' ), 'label' => __( 'trained peer supporters', 'ideell' ) ),
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|line","width":"1px"},"bottom":{"color":"var:preset|color|line","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
<?php foreach ( $figures as $figure ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.9rem","fontWeight":"600","lineHeight":"1.1"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"bottom":"0"}}},"fontFamily":"serif"} -->
<p class="has-text-color has-serif-font-family" style="color:var(--wp--preset--color--primary);margin-bottom:0;font-size:1.9rem;font-weight:600;line-height:1.1"><?php echo esc_html( $figure['value'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"0"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--ink-muted);margin-top:0;font-size:0.95rem"><?php echo esc_html( $figure['label'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
