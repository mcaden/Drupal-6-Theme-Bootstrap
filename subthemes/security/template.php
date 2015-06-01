<?php

/**
 * Implements HOOK_theme().
 */
function security_theme(&$existing, $type, $theme, $path) {
  if (!db_is_active()) {
    return array();
  }
  include_once './' . drupal_get_path('theme', 'security') . '/template.theme-registry.inc';
  return _security_theme($existing, $type, $theme, $path);
}