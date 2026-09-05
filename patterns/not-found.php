<?php
/**
 * Title: Page not found
 * Slug: ideell/not-found
 * Categories: ideell/pages
 * Description: 404 message with a search field and a route back to the site.
 * Keywords: 404, not found, error, search
 * Inserter: yes
 *
 * @package Ideell
 */

?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html__( 'We could not find that page', 'ideell' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The page may have moved or been removed. Try searching, or head back to the start.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search this site', 'ideell' ); ?>","showLabel":true,"buttonText":"<?php echo esc_attr__( 'Search', 'ideell' ); ?>","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->
