<?php
/**
 * Insert default widgets
 * on left sidebar
 *
 * @package GWT
 * @since Government Website Template 2.0
 */

function govph_default_widget() {

	$templatedir = get_template_directory_uri();
	$new_active_widgets = ['left-sidebar' => ['text-1'], 'ear-content-2' => ['text-2']];
	update_option('widget_text',[1 => ['title' => '', 'text' => '<a href=""><img id="tp-seal" src="'. $templatedir . '/images/transparency-seal-160x160.png" alt="transparency seal logo" title="Transparency Seal"></a>'], 2=> ['title' => '', 'text' => '<div id="pst-container">
						<div>Philippine Standard Time:</div><div id="pst-time"></div>
					   </div>']]);
	update_option('sidebars_widgets', $new_active_widgets);
}
add_action('after_switch_theme', 'govph_default_widget', 10, 2);