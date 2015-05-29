<?php

/**
 * Implements HOOK_theme().
 */
function contract_theme(&$existing, $type, $theme, $path) {
  if (!db_is_active()) {
    return array();
  }
  include_once './' . drupal_get_path('theme', 'contract') . '/template.theme-registry.inc';
  return _contract_theme($existing, $type, $theme, $path);
}