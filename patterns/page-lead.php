<?php
/**
 * Title: Page lead
 * Slug: ideell/page-lead
 * Categories: ideell/pages
 * Description: Page title and a short standfirst, for the top of an inner page.
 * Keywords: lead, intro, standfirst, title, header, page
 * Inserter: yes
 *
 * @package Ideell
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html__( 'Page title', 'ideell' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.6"},"color":{"text":"var:preset|color|ink-muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--ink-muted);font-size:1.2rem;line-height:1.6"><?php echo esc_html__( 'One or two sentences saying what this page is for, in the plainest language you can manage.', 'ideell' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
