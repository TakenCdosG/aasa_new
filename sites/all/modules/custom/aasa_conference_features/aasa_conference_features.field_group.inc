<?php
/**
 * @file
 * aasa_conference_features.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function aasa_conference_features_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_celia_king_dinner_guest|node|conference|form';
  $field_group->group_name = 'group_celia_king_dinner_guest';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'conference';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_form_content';
  $field_group->data = array(
    'label' => 'Celia King Dinner Guest',
    'weight' => '14',
    'children' => array(
      0 => 'field_networking_ckdg_price',
      1 => 'field_networking_ckdg_label',
      2 => 'field_networking_ckdg_descripcio',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-celia-king-dinner-guest field-group-fieldset',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_celia_king_dinner_guest|node|conference|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_celia_king_dinner|node|conference|form';
  $field_group->group_name = 'group_celia_king_dinner';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'conference';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_form_content';
  $field_group->data = array(
    'label' => 'Celia King Dinner',
    'weight' => '13',
    'children' => array(
      0 => 'field_networking_ckd_label',
      1 => 'field_networking_ckd_descripcion',
      2 => 'field_networking_ckd_top_label',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-celia-king-dinner field-group-fieldset',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_celia_king_dinner|node|conference|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content_event|node|conference|form';
  $field_group->group_name = 'group_content_event';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'conference';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Event Content',
    'weight' => '0',
    'children' => array(
      0 => 'body',
      1 => 'field_imagen_event',
      2 => 'field_event_location',
      3 => 'field_city',
      4 => 'field_state_province',
      5 => 'field_is_open',
      6 => 'field_show_on_education_page',
      7 => 'field_show_on_landing_page',
      8 => 'field_short_description',
      9 => 'title',
      10 => 'group_date_rate',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content-event field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content_event|node|conference|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_date_rate|node|conference|form';
  $field_group->group_name = 'group_date_rate';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'conference';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_content_event';
  $field_group->data = array(
    'label' => 'Date and Rate',
    'weight' => '3',
    'children' => array(
      0 => 'field_date',
      1 => 'field_member_registration_fee',
      2 => 'field_non_member_registration_fe',
      3 => 'field_early_bird_date_over',
      4 => 'field_member_reg_early_bird_fee',
      5 => 'field_non_member_early_bird_fee',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'label' => 'Date and Rate',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_date_rate|node|conference|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_dinner_groups|node|conference|form';
  $field_group->group_name = 'group_dinner_groups';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'conference';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_form_content';
  $field_group->data = array(
    'label' => 'Dinner Groups',
    'weight' => '15',
    'children' => array(
      0 => 'field_networking_dg_price',
      1 => 'field_networking_dg_label',
      2 => 'field_networking_dg_descripcion',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-dinner-groups field-group-fieldset',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_dinner_groups|node|conference|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_form_content|node|conference|form';
  $field_group->group_name = 'group_form_content';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'conference';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Form Content',
    'weight' => '1',
    'children' => array(
      0 => 'group_new_administrator_workshop',
      1 => 'group_celia_king_dinner',
      2 => 'group_celia_king_dinner_guest',
      3 => 'group_dinner_groups',
      4 => 'group_golf_outing',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_form_content|node|conference|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_golf_outing|node|conference|form';
  $field_group->group_name = 'group_golf_outing';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'conference';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_form_content';
  $field_group->data = array(
    'label' => 'Golf Outing',
    'weight' => '16',
    'children' => array(
      0 => 'field_networking_go_price',
      1 => 'field_networking_go_label',
      2 => 'field_networking_go_descripcion',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-golf-outing field-group-fieldset',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_golf_outing|node|conference|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_new_administrator_workshop|node|conference|form';
  $field_group->group_name = 'group_new_administrator_workshop';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'conference';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_form_content';
  $field_group->data = array(
    'label' => 'New Administrator Workshop',
    'weight' => '12',
    'children' => array(
      0 => 'field_precourse_naw_label',
      1 => 'field_precourse_naw_price',
      2 => 'field_precourse_naw_descripcion',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_new_administrator_workshop|node|conference|form'] = $field_group;

  return $export;
}
