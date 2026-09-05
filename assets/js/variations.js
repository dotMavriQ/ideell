/**
 * Section and Card as block variations of core/group.
 *
 * They appear in the inserter as their own named items, but what is saved is
 * plain core/group markup — so a site that later switches away from Ideell
 * keeps valid content instead of a page of invalid-block errors.
 */
( function ( blocks, i18n, domReady ) {
	'use strict';
	var __ = i18n.__;

	domReady( function () {
		blocks.registerBlockVariation( 'core/group', {
			name: 'ideell-section',
			title: __( 'Section', 'ideell' ),
			description: __(
				'A full-width band with the theme’s standard vertical rhythm. Content inside is held to the wide container.',
				'ideell'
			),
			icon: 'align-full-width',
			scope: [ 'inserter' ],
			attributes: {
				align: 'full',
				className: 'is-style-section',
				layout: { type: 'constrained', contentSize: '75rem' },
			},
			isActive: function ( blockAttributes ) {
				return (
					blockAttributes.className &&
					blockAttributes.className.indexOf( 'is-style-section' ) !== -1
				);
			},
		} );

		blocks.registerBlockVariation( 'core/group', {
			name: 'ideell-card',
			title: __( 'Card', 'ideell' ),
			description: __(
				'A padded, rounded surface that stretches to match its neighbours in a row.',
				'ideell'
			),
			icon: 'index-card',
			scope: [ 'inserter' ],
			attributes: {
				className: 'is-style-card ideell-card',
				// Flow, not constrained: a constrained group forces
				// `margin-inline: auto !important` on every child, which in a
				// flex column shrink-wraps and centres them instead of filling
				// the card. No override can beat that, so avoid it here.
				layout: { type: 'default' },
			},
			isActive: function ( blockAttributes ) {
				return (
					blockAttributes.className &&
					blockAttributes.className.indexOf( 'ideell-card' ) !== -1
				);
			},
		} );
	} );
} )( window.wp.blocks, window.wp.i18n, window.wp.domReady );
