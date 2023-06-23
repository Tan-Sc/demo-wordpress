<?php

add_action('cmb2_admin_init', 'industries_page');

function industries_page()
{
	$cmb = new_cmb2_box(array(
		'id'            => 'industries',
		'title'         => 'Industries',
		'object_types'  => array('page'),
	));

	$group = $cmb->add_field(array(
		'id'		=> 'group_industries',
		'type'		=> 'group',
		'options'	=> array(
			'group_title'	=> 'Item {#}',
			'add_button'	=> 'Add item',
			'remove_button'	=> 'Remove item',
			'sortable'		=> true,
		)
	));

	$cmb->add_group_field($group, array(
		'name'	=> 'Title',
		'id'	=> 'title',
		'type'	=> 'text'
	));

	$cmb->add_group_field($group, array(
		'name'	=> 'Image',
		'id'	=> 'img',
		'type'  => 'file',
	));

	$cmb->add_group_field($group, array(
		'name'	=> 'HyperLink',
		'id'	=> 'link',
		'type'  => 'text',
	));
}
