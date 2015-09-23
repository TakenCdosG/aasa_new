<?php
/**
 * @file
 * aaap_module_configurations.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function aaap_module_configurations_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function aaap_module_configurations_node_info() {
  $items = array(
    'aaap_module_configurations' => array(
      'name' => t('AAAP Module Configurations'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
