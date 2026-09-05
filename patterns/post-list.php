<?php
/**
 * Title: Post list
 * Slug: ideell/post-list
 * Categories: ideell/posts
 * Description: Query loop of posts as equal-height cards with featured images.
 * Keywords: posts, query, loop, grid, news, cards, archive
 * Inserter: yes
 *
 * @package Ideell
 */

?>
<!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<!-- wp:group {"className":"is-style-card-outline ideell-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card-outline ideell-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":"var:custom|radius|md"}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem"},"elements":{"link":{"typography":{"textDecoration":"none"},":hover":{"typography":{"textDecoration":"underline"}}}}}} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nothing has been published here yet.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
