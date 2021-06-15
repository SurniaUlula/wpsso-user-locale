=== WPSSO User Locale Selector ===
Plugin Name: WPSSO User Locale Selector
Plugin Slug: wpsso-user-locale
Text Domain: wpsso-user-locale
Domain Path: /languages
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.txt
Assets URI: https://surniaulula.github.io/wpsso-user-locale/assets/
Tags: user locale, user language, user region, locale, language, region, select, toolbar, menu, polylang
Contributors: jsmoriss
Requires PHP: 7.0
Requires At Least: 4.7
Tested Up To: 5.7.2
Stable Tag: 3.3.2

Quick and easy locale / language / region selector for the WordPress admin toolbar.

== Description ==

<p><img class="readme-icon" src="https://surniaulula.github.io/wpsso-user-locale/assets/icon-256x256.png"> <strong>Provides a convenient locale / language / region selector in the WordPress admin toolbar.</strong></p>

**Perfect for anyone that needs to switch languages quickly and easily:**

Allows logged-in users to easily change their preferred locale / language / region setting right from the toolbar menu, instead of having to modify their user profile settings.

The default behavior of WordPress is to apply the user locale preference only to the admin back-end - this plugin can optionally extend the locale preference to the front-end webpage as well.

<h3>Do you use the Polylang plugin?</h3>

If the Polylang plugin is detected, the locale selector will automatically use the correct Polylang language URLs.

<h3>Users Love the WPSSO UL Add-on</h3>

&#x2605;&#x2605;&#x2605;&#x2605;&#x2605; - "Practical and Fast - Works as advertised. Very easy to use." - [grouper](https://wordpress.org/support/topic/practical-and-fast/)

<h3>WPSSO Core Required</h3>

WPSSO User Locale Selector (WPSSO UL) is an add-on for the [WPSSO Core plugin](https://wordpress.org/plugins/wpsso/).

== Installation ==

<h3 class="top">Install and Uninstall</h3>

* [Install the WPSSO User Locale Selector add-on](https://wpsso.com/docs/plugins/wpsso-user-locale/installation/install-the-plugin/).
* [Uninstall the WPSSO User Locale Selector add-on](https://wpsso.com/docs/plugins/wpsso-user-locale/installation/uninstall-the-plugin/).

== Frequently Asked Questions ==

<h3 class="top">Frequently Asked Questions</h3>

* None.

<h3>Notes and Documentation</h3>

* [Developer Resources](https://wpsso.com/docs/plugins/wpsso-user-locale/notes/developer/)
	* [Filters](https://wpsso.com/docs/plugins/wpsso-user-locale/notes/developer/filters/)
		* [All Filters](https://wpsso.com/docs/plugins/wpsso-user-locale/notes/developer/filters/all/)
		* [Filter Examples](https://wpsso.com/docs/plugins/wpsso-user-locale/notes/developer/filters/examples/)
			* [Disable User Locale on Front-End](https://wpsso.com/docs/plugins/wpsso-user-locale/notes/developer/filters/examples/disable-user-locale-on-front-end/)
			* [Modify the Menu Title](https://wpsso.com/docs/plugins/wpsso-user-locale/notes/developer/filters/examples/modify-the-menu-title/)
			* [Modify the Redirect URL](https://wpsso.com/docs/plugins/wpsso-user-locale/notes/developer/filters/examples/modify-the-redirect-url/)

== Screenshots ==

01. WPSSO User Locale selector in the WordPress toolbar menu.

== Changelog ==

<h3 class="top">Version Numbering</h3>

Version components: `{major}.{minor}.{bugfix}[-{stage}.{level}]`

* {major} = Major structural code changes / re-writes or incompatible API changes.
* {minor} = New functionality was added or improved in a backwards-compatible manner.
* {bugfix} = Backwards-compatible bug fixes or small improvements.
* {stage}.{level} = Pre-production release: dev < a (alpha) < b (beta) < rc (release candidate).

<h3>Standard Version Repositories</h3>

* [GitHub](https://surniaulula.github.io/wpsso-user-locale/)
* [WordPress.org](https://plugins.trac.wordpress.org/browser/wpsso-user-locale/)

<h3>Changelog / Release Notes</h3>

**Version 3.3.2 (2021/06/11)**

* **New Features**
	* None.
* **Improvements**
	* Minor label change and translation update.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v4.7.
	* WPSSO Core v8.30.0.

**Version 3.3.1 (2021/04/30)**

* **New Features**
	* None.
* **Improvements**
	* Minor CSS and text formatting updates.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v4.7.
	* WPSSO Core v8.28.0.

**Version 3.3.0 (2021/04/17)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Added support for `SucomUtilWP::get_available_languages()`.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v4.7.
	* WPSSO Core v8.26.3.

**Version 3.2.1 (2021/02/25)**

* **New Features**
	* None.
* **Improvements**
	* Updated the banners and icons of WPSSO Core and its add-ons.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v4.7.
	* WPSSO Core v8.25.2.

**Version 3.2.0 (2020/11/20)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Included the `$addon` argument for library class constructors.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v4.7.
	* WPSSO Core v8.16.0.

**Version 3.1.0 (2020/11/20)**

* **New Features**
	* None.
* **Improvements**
	* Renamed the 'default' menu item to 'Default'.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Renamed the 'wpsso_user_locale_front_end' filter to 'wpsso_user_locale_show_on_front'.
* **Requires At Least**
	* PHP v5.6.
	* WordPress v4.7.
	* WPSSO Core v8.13.0.

**Version 3.0.1 (2020/10/17)**

* **New Features**
	* None.
* **Improvements**
	* Added a call to switch_to_locale() on the front-end.
	* Refactored the add-on class to extend a new WpssoAddOn abstract class.
* **Bugfixes**
	* Fixed backwards compatibility with older 'init_objects' and 'init_plugin' action arguments.
* **Developer Notes**
	* Added a new WpssoAddOn class in lib/abstracts/add-on.php.
	* Added a new SucomAddOn class in lib/abstracts/com/add-on.php.
* **Requires At Least**
	* PHP v5.6.
	* WordPress v4.7.
	* WPSSO Core v8.12.1.

== Upgrade Notice ==

= 3.3.2 =

(2021/06/11) Minor label change and translation update.

= 3.3.1 =

(2021/04/30) Minor CSS and text formatting updates.

= 3.3.0 =

(2021/04/17) Added support for `SucomUtilWP::get_available_languages()`.

= 3.2.1 =

(2021/02/25) Updated the banners and icons of WPSSO Core and its add-ons.

= 3.2.0 =

(2020/11/30) Included the `$addon` argument for library class constructors.

= 3.1.0 =

(2020/11/20) Renamed the 'default' menu item to 'Default'.

= 3.0.1 =

(2020/10/17) Added a call to switch_to_locale() on the front-end. Refactored the add-on class to extend a new WpssoAddOn abstract class.

