# PersonalProject Theme

This WordPress theme (PersonalProject) is an advanced theme exercise implementing common theme features requested for the final project.

Features
- Enqueued CSS (`assets/css/style.css`) and JS (`assets/js/main.js`) with file-based versioning
- `add_theme_support` for: title-tag, post-thumbnails, post-formats, HTML5 elements, automatic-feed-links, responsive embeds
- Registered nav menus: `primary` and `footer`
- Sidebar widget area: `main-sidebar` (template: `sidebar.php`)
- Custom Post Type: `property` with taxonomies `property_type` and `location`
- Post formats support and template-part driven templates
- Search form (`searchform.php`) and search results (`search.php`) with pagination and edit links
- Improved templates: `single.php`, `single-property.php`, `archive.php`, `404.php` and pagination helper (`rea_pagination`)
- Responsive menu toggle (JS) and basic responsive CSS grid for archives

Quick setup
1. Copy the theme to `wp-content/themes/PersonalProject`.
2. Activate the theme in Appearance → Themes.
3. Flush rewrite rules: go to Settings → Permalinks and click "Save Changes".
4. Create or import content. For the `property` CPT, add a few posts and assign `property_type`/`location` terms.
5. Register menus in Appearance → Menus and assign the `Primary` menu to the `primary` location.
6. Add widgets to the `Main Sidebar` under Appearance → Widgets.

Testing & developer notes
- Template files of interest:
	- `functions.php` — theme setup, enqueues, CPT and taxonomies, pagination helper
	- `header.php` / `footer.php` — header and footer layout
	- `index.php`, `archive.php`, `single.php`, `single-property.php`, `search.php`, `404.php` — core templates
	- `template-parts/` — reusable content blocks (`content-article.php`, `content-page.php`, `content-archive.php`)
	- `searchform.php`, `sidebar.php`
- Flush permalinks after activating to ensure CPT rewrite rules work.
- To test locally using WP-CLI (if available):

```bash
# activate theme
wp theme activate PersonalProject
# create a property post
wp post create --post_type=property --post_title='Sample Property' --post_status=publish
```

Accessibility & ARIA
- The responsive menu includes an ARIA-expanded toggle on the `.menu-toggle` button and exposes `primary-menu` for screen readers.

If you want, I can:
- run a quick PHP lint pass across the theme
- create sample demo content (posts and properties)
- prepare a zip of the theme for distribution
