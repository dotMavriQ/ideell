<?php
/**
 * Title: Upcoming events
 * Slug: ideell/event-list
 * Categories: ideell/posts
 * Description: A list of upcoming events, driven by posts in an Events
 *              category.
 * Keywords: events, calendar, meetings, upcoming, agenda, annual meeting
 * Inserter: yes
 *
 * Deliberately built on core posts filtered by category rather than on an events
 * post type. A theme may not register post types, and a site that later installs
 * a real events plugin should not find its content stranded in a type this theme
 * invented. Create a category called Events and point the query at it.
 *
 * @package Ideell
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Upcoming events', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Members are welcome at all of these. Point this query at your Events category.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<!-- wp:group {"className":"is-style-card-outline","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-card-outline"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.2rem"},"spacing":{"margin":{"top":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:read-more {"content":"Details","className":"is-style-outline"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nothing in the diary just now.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
