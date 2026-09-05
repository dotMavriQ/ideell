<?php
/**
 * Title: Latest news
 * Slug: ideell/news-teaser
 * Categories: ideell/posts
 * Description: The three most recent posts as cards, with a link to the full
 *              archive. For placing on a front page or a landing page.
 * Keywords: news, posts, latest, updates, teaser, cards, query
 * Inserter: yes
 *
 * @package Ideell
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Latest news', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'All news', 'ideell' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<!-- wp:group {"className":"is-style-card-outline ideell-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card-outline ideell-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":"var:custom|radius|md"}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem"},"elements":{"link":{"typography":{"textDecoration":"none"},":hover":{"typography":{"textDecoration":"underline"}}}}}} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nothing has been published here yet.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
