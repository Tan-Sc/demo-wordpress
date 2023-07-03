<?php
add_action('admin_menu', 'jl_add_admin_menu');
add_action('admin_init', 'banner_settings_init');


function jl_add_admin_menu()
{

	add_menu_page('global-banner', 'Global Settings', 'manage_options', 'global-banner', 'options_banner', 'dashicons-admin-settings', 3);
}


function banner_settings_init()
{

	register_setting('pluginPage', 'banner_settings');

	add_settings_section(
		'pluginPage_section',
		'',
		'banner_settings_section_callback',
		'pluginPage'
	);

	add_settings_field('banner_image', 'Banner Image', 'banner_image_render', 'pluginPage', 'pluginPage_section');
	add_settings_field('banner_hyperlink', 'Banner Link', 'banner_hyper_link_render', 'pluginPage', 'pluginPage_section');
	add_settings_field('phone_hotline', 'Phone Hot Line', 'phone_hotline_render', 'pluginPage', 'pluginPage_section');

}


function banner_image_render()
{

	$options = get_option('banner_settings');
?>
	<input type='text' style="width:590px;padding:10px" name='banner_settings[banner_image]' value='<?php echo $options['banner_image']; ?>'>
<?php

}


function banner_hyper_link_render()
{

	$options = get_option('banner_settings');
?>
	<input type='text' style="width:590px;padding:10px;" name='banner_settings[banner_hyperlink]' value='<?php echo trim($options['banner_hyperlink']); ?>'>
<?php

}

function phone_hotline_render()
{

	$options = get_option('banner_settings');
?>
	<input type='text' style="width:590px;padding:10px;" name='banner_settings[phone_hotline]' value='<?php echo trim($options['phone_hotline']); ?>'>
<?php

}

function banner_settings_section_callback()
{
}


function options_banner()
{

?>
	<form action='options.php' method='post'>

		<h2>Global Setting</h2>

		<?php
		settings_fields('pluginPage');
		do_settings_sections('pluginPage');
		submit_button();
		?>

	</form>
<?php

}
