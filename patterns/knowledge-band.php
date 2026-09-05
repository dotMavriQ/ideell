<?php
/**
 * Title: Knowledge base band
 * Slug: ideell/knowledge-band
 * Categories: ideell/sections
 * Description: A coloured band pointing at the knowledge base, with the main
 *              topics listed as links.
 * Keywords: knowledge, resources, library, information, topics, band
 * Inserter: yes
 *
 * The topic links are spelled out rather than hidden behind one button. Someone
 * arriving frightened and searching for a single word will find it faster in a
 * visible list than behind a generic "explore" call to action.
 *
 * @package Ideell
 */

$topics = array(
	__( 'Symptoms', 'ideell' ),
	__( 'Treatment', 'ideell' ),
	__( 'Afterwards', 'ideell' ),
	__( 'For families', 'ideell' ),
);
?>
<!-- wp:group {"align":"full","className":"is-style-section","backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section has-secondary-background-color has-background"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Knowledge, when you need it', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Reliable, plainly written information for the people affected, for those close to them, and for the professionals involved in their care.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Browse the knowledge base', 'ideell' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.1rem"><?php echo esc_html__( 'Start with a topic', 'ideell' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"ideell-linklist","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<ul class="wp-block-list ideell-linklist">
<?php foreach ( $topics as $topic ) : ?>
<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html( $topic ); ?></a></li>
<!-- /wp:list-item -->
<?php endforeach; ?>
</ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
