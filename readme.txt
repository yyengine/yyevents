=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://yyengine.jp/
Tags: event, concert, sport, theater listing
Requires at least: 3.8
Tested up to: 3.8.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables you to show a list of Events, Concerts, Sports and Theater Listings.

== Description ==

Enables you to show a list of Events, Concerts, Sports and Theater Listings.

== Installation ==

1. Upload `/yy-events/` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

Add the shortcode [yyevents] in the content of any pages.

future event
[yyevents]

old event(evetnt per page = 5)
[yyevents pagenum=5 show="old"]

Override shortcode settings:

pagenum=int - default 10
singlelink=on|off - evetn detail page link
image=on|off - default on
show=now|old|all - view event

== Screenshots ==

1. event management
2. shotcode add
3. shotcode add (old event)
4. event page
5. event input

== Changelog ==

= 1.0 =
* first commit.

