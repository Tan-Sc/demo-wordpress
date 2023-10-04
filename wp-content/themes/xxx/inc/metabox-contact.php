<?php
add_action('cmb2_admin_init', 'cmb2_contact');

function cmb2_contact()
{
    // Email template
  $cmb = new_cmb2_box(array(
    'id'            => '_qa_contact_email-template',
    'title'         => 'Email template',
    'object_types'  => array('page'),
    'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-contact.php'])
  ));

  $group = $cmb->add_field(array(
    'id'        => '_qa_contact_email-template_tos',
    'type'      => 'group',
    'options'   => array(
      'group_title'   => 'Item {#}',
      'add_button'    => 'Add item',
      'remove_button' => 'Remove item',
      'sortable'      => true
    )
  ));

  $cmb->add_group_field($group, array(
    'id'    => '_qa_contact_email-template_to',
    'name'  => 'To',
    'type'  => 'text'
  ));

  $group = $cmb->add_field(array(
    'id'        => '_qa_contact_email-template_ccs',
    'type'      => 'group',
    'options'   => array(
      'group_title'   => 'Item {#}',
      'add_button'    => 'Add item',
      'remove_button' => 'Remove item',
      'sortable'      => true
    )
  ));

  $cmb->add_group_field($group, array(
    'id'    => '_qa_contact_email-template_cc',
    'name'  => 'Cc',
    'type'  => 'text'
  ));

  $group = $cmb->add_field(array(
    'id'        => '_qa_contact_email-template_bccs',
    'type'      => 'group',
    'options'   => array(
      'group_title'   => 'Item {#}',
      'add_button'    => 'Add item',
      'remove_button' => 'Remove item',
      'sortable'      => true
    )
  ));

  $cmb->add_group_field($group, array(
    'id'    => '_qa_contact_email-template_bcc',
    'name'  => 'Bcc',
    'type'  => 'text'
  ));

  $cmb->add_field(array(
    'id'    => '_qa_contact_email-template_subject',
    'name'  => 'Subject',
    'type'  => 'text'
  ));
}