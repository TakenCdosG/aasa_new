<?php
/**
 * @file
 * aaap_module_configurations.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function aaap_module_configurations_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_config_reminder_emails|node|aaap_module_configurations|form';
  $field_group->group_name = 'group_config_reminder_emails';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'aaap_module_configurations';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Configure Renewals',
    'weight' => '2',
    'children' => array(
      0 => 'field_reminder_emails',
      1 => 'field_renewal_period',
      2 => 'group_initial_enewal_rice',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'label' => 'Configure Renewals',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => 'group-config-reminder-emails field-group-tab',
        'description' => '',
      ),
      'formatter' => 'closed',
    ),
  );
  $export['group_config_reminder_emails|node|aaap_module_configurations|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content|node|aaap_module_configurations|form';
  $field_group->group_name = 'group_content';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'aaap_module_configurations';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content',
    'weight' => '3',
    'children' => array(
      0 => 'body',
      1 => 'title',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content|node|aaap_module_configurations|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_global_settings|node|aaap_module_configurations|form';
  $field_group->group_name = 'group_global_settings';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'aaap_module_configurations';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Configure Global Settings',
    'weight' => '0',
    'children' => array(
      0 => 'field_membership_registration_fe',
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
  $export['group_global_settings|node|aaap_module_configurations|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_initial_enewal_rice|node|aaap_module_configurations|form';
  $field_group->group_name = 'group_initial_enewal_rice';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'aaap_module_configurations';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_config_reminder_emails';
  $field_group->data = array(
    'label' => 'Initial Renewal Price',
    'weight' => '0',
    'children' => array(
      0 => 'field_amount_adjunct_member_init',
      1 => 'field_amount_emeritus_membr_init',
      2 => 'field_amount_regular_member_init',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-initial-enewal-rice field-group-fieldset',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_initial_enewal_rice|node|aaap_module_configurations|form'] = $field_group;

  return $export;
}
