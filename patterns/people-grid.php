<?php
/**
 * Title: People and board
 * Slug: ideell/people-grid
 * Categories: ideell/sections
 * Description: A grid of named people with roles, for a board, a staff page or
 *              a list of contacts.
 * Keywords: people, board, staff, team, trustees, governance, contact
 * Inserter: yes
 *
 * Associations are usually obliged to publish who sits on the board, and readers
 * deciding whether to trust an organisation look for exactly this. Names are
 * plain text rather than headings so the page outline stays about the sections,
 * not about eight individual people.
 *
 * @package Ideell
 */

$placeholder = get_theme_file_uri( 'assets/images/placeholder.svg' );

$people = array(
	array( 'name' => __( 'Full name', 'ideell' ), 'role' => __( 'Chair', 'ideell' ) ),
	array( 'name' => __( 'Full name', 'ideell' ), 'role' => __( 'Vice chair', 'ideell' ) ),
	array( 'name' => __( 'Full name', 'ideell' ), 'role' => __( 'Treasurer', 'ideell' ) ),
	array( 'name' => __( 'Full name', 'ideell' ), 'role' => __( 'Secretary', 'ideell' ) ),
);
?>
<!-- wp:group {"align":"full","className":"is-style-section","layout":{"type":"constrained","contentSize":"75rem"}} -->
<div class="wp-block-group alignfull is-style-section"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Our board', 'ideell' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The board is elected by the members at the annual meeting.', 'ideell' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group">
<?php foreach ( $people as $person ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"var:custom|radius|lg"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder ); ?>" alt="" width="1200" height="800" style="border-radius:var(--wp--custom--radius--lg)"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"0"}}}} -->
<p style="margin-bottom:0;font-weight:600"><?php echo esc_html( $person['name'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"0"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--ink-muted);margin-top:0;font-size:0.95rem"><?php echo esc_html( $person['role'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
