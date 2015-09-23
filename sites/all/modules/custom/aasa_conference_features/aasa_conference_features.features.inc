<?php
/**
 * @file
 * aasa_conference_features.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function aasa_conference_features_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function aasa_conference_features_image_default_styles() {
  $styles = array();

  // Exported image style: thumbnail_148x114.
  $styles['thumbnail_148x114'] = array(
    'label' => 'Thumbnail (148x114)',
    'effects' => array(
      16 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 148,
          'height' => 114,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_uc_product_default_classes().
 */
function aasa_conference_features_uc_product_default_classes() {
  $items = array(
    'conference' => array(
      'name' => t('Conference'),
      'base' => 'uc_product',
      'description' => t('Event of type Conference.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'national_conference_add_ons' => array(
      'name' => t('National Conference - Add-ons'),
      'base' => 'uc_product',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
