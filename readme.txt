=== Ideell ===
Contributors: dotmavriq
Requires at least: 6.7
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 0.1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, news, education, accessibility-ready, block-patterns, block-styles, style-variations, full-site-editing, editor-style, translation-ready, wide-blocks, custom-logo, featured-images, one-column, grid-layout, rtl-language-support, template-editing, threaded-comments

An accessible block theme for nonprofit associations.

== Description ==

Charities, foundations, patient organisations and unions publish much the same
handful of things. An appeal. A description of the work. A knowledge base. A
board. An annual report. Most themes leave you to assemble all of it from
scratch, so small organisations either pay an agency or put up something that
looks provisional.

Ideell ships those sections as block patterns, on a typographic system built for
long-form reading, and holds to WCAG 2.2 AA throughout.

The name is the Swedish word for non-profit, as in ideell foerening.

Twenty-two patterns cover a full homepage and the inner pages around it: heroes
with and without a photograph, programme cards, impact figures, a campaign appeal
with a real progress element, a knowledge base band, news and event listings,
board and people grids, lived-experience quotations, an FAQ built on the core
accordion block, and contact, newsletter and volunteer sections.

Six style variations ship with the theme: the default Evergreen, plus Plum,
Nordic Blue, Ochre, Ink and High Contrast. Colours are addressed by role rather
than by hue, so a variation restates the palette without any pattern needing to
change. Every variation is checked against WCAG 2.2 AA before release, and High
Contrast meets AAA on all text.

Section and Card are block variations of the core Group block. They appear in the
inserter under their own names, but what is saved is ordinary Group markup, so
content built with them stays valid if the site later changes theme.

The theme registers no post types and processes no form submissions, both of
which belong in a plugin. Sections that need a form ship as layout with a clearly
marked slot for the block from whichever form plugin the site uses. Event
listings run on core posts in a category, so nothing is stranded if a real events
plugin arrives later.

== Installation ==

1. In your WordPress admin, go to Appearance, then Themes, then Add New.
2. Search for Ideell, install it and activate it.
3. Open the Site Editor to choose a style variation and set your logo.
4. Build pages from the patterns in the inserter, grouped under Ideell.

== Frequently Asked Questions ==

= Does the theme handle donations? =

No. It provides the appeal and donation layouts, including a progress element you
can set by hand, but taking payment belongs to a payment or fundraising plugin.
Insert that plugin's block into the slot the pattern marks.

= Why is there no events post type? =

Themes on WordPress.org may not register post types, and it would be the wrong
place for one: content stored in a type a theme invented is stranded the moment
the theme changes. The event patterns run on ordinary posts in a category.

= Can I change the colours? =

Yes. Pick one of the six style variations in the Site Editor, or edit the palette
directly. Because the theme addresses colours by role rather than by name, every
pattern follows a palette change without being edited.

= Are the fonts loaded from Google? =

No. Source Serif 4 and Source Sans 3 are bundled with the theme and served from
your own site, which avoids sending visitor IP addresses to a third party.

== Copyright ==

Ideell WordPress Theme, (C) 2026.
Ideell is distributed under the terms of the GNU GPL version 2 or later.

This theme bundles the following third-party resources:

Source Serif 4
Copyright 2014-2023 Adobe (http://www.adobe.com/), with Reserved Font Name Source
License: SIL Open Font License, Version 1.1
Source: https://github.com/adobe-fonts/source-serif
Licence text: assets/fonts/LICENSE-source-serif-4.txt

Source Sans 3
Copyright 2010-2024 Adobe (http://www.adobe.com/), with Reserved Font Name Source
License: SIL Open Font License, Version 1.1
Source: https://github.com/adobe-fonts/source-sans
Licence text: assets/fonts/LICENSE-source-sans-3.txt

assets/images/placeholder.svg was authored for this theme and is distributed
under the same GPL v2 or later licence as the theme itself.

The theme bundles no photographs. Images shown in the screenshot are the
placeholder above.

== Changelog ==

= 0.1.0 =
* Initial release.
