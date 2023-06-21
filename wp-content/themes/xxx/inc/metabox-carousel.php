<?php

add_action('cmb2_admin_init', 'img_carousel');

function img_carousel()
{
	$cmb = new_cmb2_box(array(
		'id'            => 'img_carousel',
		'title'         => 'IMG Carousel',
		'object_types'  => array('page'),
	));

	$group = $cmb->add_field(array(
		'id'		=> 'group_img_carousel',
		'type'		=> 'group',
		'options'	=> array(
			'group_title'	=> 'Item {#}',
			'add_button'	=> 'Add item',
			'remove_button'	=> 'Remove item',
			'sortable'		=> true,
		)
	));

    $cmb->add_group_field($group, array(
		'name'	=> 'Image',
		'id'	=> 'img',
        'type'  => 'file',
	));
}
