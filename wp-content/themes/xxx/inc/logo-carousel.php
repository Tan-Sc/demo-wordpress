<?php

add_action('cmb2_admin_init', 'logo_carousel');

function logo_carousel()
{
	$cmb = new_cmb2_box(array(
		'id'            => 'logo_carousel',
		'title'         => 'Logo Carousel',
		'object_types'  => array('page'),
	));

	$group = $cmb->add_field(array(
		'id'		=> 'group_logo_carousel',
		'type'		=> 'group',
		'options'	=> array(
			'group_title'	=> 'Item {#}',
			'add_button'	=> 'Add item',
			'remove_button'	=> 'Remove item',
			'sortable'		=> true,
		)
	));

	$cmb->add_group_field($group, array(
		'name'	=> 'Logo',
		'id'	=> 'img',
		'type'  => 'file',
	));

	$cmb->add_group_field($group, array(
		'name'	=> 'Hyperlink',
		'id'	=> 'link',
		'type'  => 'text',
	));
}
