<?php

include_once ABSPATH . 'wp-content/plugins/yy-events/wpalchemy/MetaBox.php';
include_once ABSPATH . 'wp-content/plugins/yy-events/wpalchemy/MediaAccess.php';
$wpalchemy_media_access = new WPAlchemy_MediaAccess();

//echo(ABSPATH . 'wp-content/plugins/yy-events/wpalchemy/MetaBox.php');

// global styles for the meta boxes
if (is_admin()) add_action('admin_enqueue_scripts', 'metabox_style');

function metabox_style() {
	wp_enqueue_style('wpalchemy-metabox', plugin_dir_url(__FILE__) . '/meta.css');

	//jQuery UI datepicker
	wp_enqueue_style('jquery-ui-datepicker-style', plugin_dir_url(__FILE__) . 'jquery-ui.css');
	wp_enqueue_script('jquery-ui-datepicker');
}

/* eof */