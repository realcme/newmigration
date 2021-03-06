<?php
// $Id: theme-settings-init.php,v 1.1 2008-04-18 02:24:21 valerie Exp $

if (is_null(theme_get_setting('zen_block_editing'))) {
  global $theme_key;

  /*
   * The default values for the theme variables. Make sure $defaults exactly
   * matches the $defaults in the theme-settings.php file.
   */
  $defaults = array(
    'zen_block_editing' => 1,
    'zen_breadcrumb' => 'yes',
    'zen_breadcrumb_separator' => ' › ',
    'zen_breadcrumb_home' => 1,
    'zen_breadcrumb_trailing' => 1,
    'zen_layout' => 'border-politics-liquid',
    'zen_wireframes' => 0,
  );

  // Save default theme settings
  variable_set(
    str_replace('/', '_', 'theme_'. $theme_key .'_settings'),
    array_merge($defaults, theme_get_settings($theme_key))
  );
  // Force refresh of Drupal internals
  theme_get_setting('', TRUE);
}
