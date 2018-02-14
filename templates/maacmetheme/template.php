<?php
// $Id: template.php 9021 2012-11-13 20:19:59Z southern $

/**
 * @file
 *
 * OVERRIDING THEME FUNCTIONS
 *
 * The Drupal theme system uses special theme functions to generate HTML output
 * automatically. Often we wish to customize this HTML output. To do this, we
 * have to override the theme function. You have to first find the theme
 * function that generates the output, and then "catch" it and modify it here.
 * The easiest way to do it is to copy the original function in its entirety and
 * paste it here, changing the prefix from theme_ to phptemplate_ or zen_. For
 * example:
 *
 *   original: theme_breadcrumb()
 *   theme override: zen_breadcrumb()
 *
 * DIFFERENCES BETWEEN ZEN SUB-THEMES AND NORMAL DRUPAL SUB-THEMES
 *
 * The Zen theme allows its sub-themes to have their own template.php files. The
 * only restriction with these files is that they cannot redefine any of the
 * functions that are already defined in Zen's main template files:
 *   template.php, template-menus.php, and template-subtheme.php.
 * Every theme override function used in those files is documented below in this
 * file.
 *
 * Also remember that the "main" theme is still Zen, so your theme override
 * functions should be named as such:
 *  theme_block()      becomes  zen_block()
 *  theme_feed_icon()  becomes  zen_feed_icon()  as well
 *
 * However, there are two exceptions to the "theme override functions should use
 * 'zen' and not 'mytheme'" rule. They are as follows:
 *
 * Normally, for a theme to define its own regions, you would use the
 * THEME_regions() fuction. But for a Zen sub-theme to define its own regions,
 * use the function name
 *   realcmetheme_regions()
 * where realcmetheme is the name of your sub-theme. For example, the zen_classic
 * theme would define a zen_classic_regions() function.
 *
 * For a sub-theme to add its own variables, instead of _phptemplate_variables,
 * use these functions:
 *   realcmetheme_preprocess_page(&$vars)     to add variables to the page.tpl.php
 *   realcmetheme_preprocess_node(&$vars)     to add variables to the node.tpl.php
 *   realcmetheme_preprocess_comment(&$vars)  to add variables to the comment.tpl.php
 *   realcmetheme_preprocess_block(&$vars)    to add variables to the block.tpl.php
 */


/*
 * Initialize theme settings
 */
include_once 'theme-settings-init.php';


/*
 * Sub-themes with their own page.tpl.php files are seen by PHPTemplate as their
 * own theme (seperate from Zen). So we need to re-connect those sub-themes
 * with the main Zen theme.
 */
include_once './'. drupal_get_path('theme', 'zen') .'/template.php';

drupal_set_html_head('<link rel="shortcut icon" href="'. get_cdn_base_url().'favicon.ico' .'" type="image/x-icon" />');

/*
 * Add the stylesheets you will need for this sub-theme.
 *
 * To add stylesheets that are in the main Zen folder, use path_to_theme().
 * To add stylesheets thar are in your sub-theme's folder, use path_to_subtheme().
 */

// Add any stylesheets you would like from the main Zen theme.
drupal_add_css(path_to_subtheme() .'/html-elements.css', 'theme', 'all');
drupal_add_css(path_to_theme() .'/tabs.css', 'theme', 'all');
drupal_add_css(path_to_theme() .'/lytebox.css', 'theme', 'all');

// Then add styles for this sub-theme.
drupal_add_css(path_to_subtheme() .'/layout.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/realcmetheme.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/promotions.css', 'theme', 'all');

drupal_add_css(path_to_subtheme() .'/css/rcm_reset.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_fonts.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_base.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/course/rcm_base.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_layout.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_nav.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_content.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/course/rcm_content.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_accordion.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_thickbox.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/core.css', 'theme', 'all');


// Avoid IE5 bug that always loads @import print stylesheets
zen_add_print_css(path_to_subtheme() .'/print.css');

// Javascript
drupal_add_js(drupal_get_path('module', 'cmebase').'/js/allscripts.js?v=1');

/**
 * Declare the available regions implemented by this theme.
 *
 * @return
 *   An array of regions.
 */
/* -- Delete this line if you want to use this function
function realcmetheme_regions() {
  return array(
    'left' => t('left sidebar'),
    'right' => t('right sidebar'),
    'navbar' => t('navigation bar'),
    'content_top' => t('content top'),
    'content_bottom' => t('content bottom'),
    'header' => t('header'),
    'footer' => t('footer'),
    'closure_region' => t('closure'),
  );
}
// */


/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
/* -- Delete this line if you want to use this function
function zen_breadcrumb($breadcrumb) {
  return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .' ›</div>';
}
// */


/**
 * Override or insert PHPTemplate variables into all templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 * @param $hook
 *   The name of the theme function being called (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function realcmetheme_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert PHPTemplate variables into the page templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 */
/* -- Delete this line if you want to use this function
function realcmetheme_preprocess_page(&$vars) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert PHPTemplate variables into the node templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 */
/* -- Delete this line if you want to use this function
function realcmetheme_preprocess_node(&$vars) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert PHPTemplate variables into the comment templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 */
/* -- Delete this line if you want to use this function
function realcmetheme_preprocess_comment(&$vars) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert PHPTemplate variables into the block templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 */
/* -- Delete this line if you want to use this function
function realcmetheme_preprocess_block(&$vars) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */


/**
 * Override the Drupal search form using the search-theme-form.tpl.php file.
 */
/* -- Delete this line if you want to use this function
function phptemplate_search_theme_form($form) {
  return _phptemplate_callback('search_theme_form', array('form' => $form), array('search-theme-form'));
}
// */

/**
 * Generate the HTML representing a given menu item ID.
 *
 * An implementation of theme_menu_item_link()
 *
 * @param $item
 *   array The menu item to render.
 * @param $link_item
 *   array The menu item which should be used to find the correct path.
 * @return
 *   string The rendered menu item.
 */
/* -- Delete this line if you want to use this function
function zen_menu_item_link($item, $link_item) {
  // If an item is a LOCAL TASK, render it as a tab
  $tab = ($item['type'] & MENU_IS_LOCAL_TASK) ? TRUE : FALSE;
  return l(
    $tab ? '<span class="tab">'. check_plain($item['title']) .'</span>' : $item['title'],
    $link_item['path'],
    !empty($item['description']) ? array('title' => $item['description']) : array(),
    !empty($item['query']) ? $item['query'] : NULL,
    !empty($link_item['fragment']) ? $link_item['fragment'] : NULL,
    FALSE,
    $tab
  );
}
// */

/**
 * Duplicate of theme_menu_local_tasks() but adds clear-block to tabs.
 */
/* -- Delete this line if you want to use this function
function zen_menu_local_tasks() {
  $output = '';

  if ($primary = menu_primary_local_tasks()) {
    $output .= '<ul class="tabs primary clear-block">'. $primary .'</ul>';
  }
  if ($secondary = menu_secondary_local_tasks()) {
    $output .= '<ul class="tabs secondary clear-block">'. $secondary .'</ul>';
  }

  return $output;
}
// */

/**
 * Overriding theme_comment_wrapper to add CSS id around all comments
 * and add "Comments" title above
 */
/* -- Delete this line if you want to use this function
function zen_comment_wrapper($content) {
  return '<div id="comments"><h2 id="comments-title" class="title">'. t('Comments') .'</h2>'. $content .'</div>';
}
// */

/**
 * Duplicate of theme_username() with rel=nofollow added for commentators.
 */
/* -- Delete this line if you want to use this function
function zen_username($object) {

  if ($object->uid && $object->name) {
    // Shorten the name when it is too long or it will break many tables.
    if (drupal_strlen($object->name) > 20) {
      $name = drupal_substr($object->name, 0, 15) .'...';
    }
    else {
      $name = $object->name;
    }

    if (user_access('access user profiles')) {
      $output = l($name, 'user/'. $object->uid, array('title' => t('View user profile.')));
    }
    else {
      $output = check_plain($name);
    }
  }
  else if ($object->name) {
    // Sometimes modules display content composed by people who are
    // not registered members of the site (e.g. mailing list or news
    // aggregator modules). This clause enables modules to display
    // the true author of the content.
    if ($object->homepage) {
      $output = l($object->name, $object->homepage, array('rel' => 'nofollow'));
    }
    else {
      $output = check_plain($object->name);
    }

    $output .= ' ('. t('not verified') .')';
  }
  else {
    $output = variable_get('anonymous', t('Anonymous'));
  }

  return $output;
}
// */



/**
 * Output jquery/javascript for storing cookie information:
 * - window height in a cookie when loading / resizing window
 * - current URL 
 *
 * @return the script string
 */
function phptemplate_cookie_js() {
  return navigation_cookie_js();
}

function phptemplate_opencomp_js() {
  $openurl = get_cmecompanion_open_url();
  $s = '';
  if (!empty($openurl)) {
    $s .= "<script>"."\n";
    $s .= "$(document).ready(function() {"."\n";
  		// open the CMECompanion to the given address
    $s .= "tb_show('', '".$openurl."', '');"."\n";
    $s .= '});'."\n";
    $s .= "</script>"."\n";
  }
  return $s;
}

function theme_views_view_table_all_activities($view, $nodes, $type) {
  require_once(drupal_get_path('module', 'cmemembership').'/view-course-listing.inc');
  return course_listing($view, $nodes, $type);
}

function theme_views_view_table_activities($view, $nodes, $type) {
  require_once(drupal_get_path('module', 'cmemembership').'/view-course-listing.inc');
  return course_listing($view, $nodes, $type);
}

/**
 * Themes the table shown in the planner block
 *
 * @param unknown_type $view
 * @param unknown_type $nodes
 * @param unknown_type $type
 * @return unknown
 */
function theme_views_view_table_planner_block($view, $nodes, $type) {
  $icon_base_path = base_path().'/'.path_to_subtheme().'/images/';
  $fields = _views_get_fields();
  $title_max_length = 15;
  //strftime("%b %d, %Y", $date)
  
  foreach ($nodes as $node) {
    $row = array();
    foreach ($view->field as $field) {
      if ($fields[$field['id']]['visible'] !== FALSE) {
        $cell = array();
        $cell['class'] = "view-field ". views_css_safe('view-field-'. $field['queryname']);
        $cell['data'] = views_theme_field('views_handle_field', $field['queryname'], $fields, $field, $node, $view);
        if ($field['field'] == 'title') {
          $p = (strlen($cell['data']) > $title_max_length) ? ' (...)' : '';
          $t = substr($cell['data'], 0, $title_max_length).$p;
          $cell['data'] = $t;
        } else if ($field['field'] == 'field_scheduled_begin_value') {
          $t = strftime("%b %d", strtotime($node->$field['queryname']));
          $cell['data'] = $t;
        }
        $row[] = $cell;
      }
    }
    $rows[] = $row;
  }
   return theme('table', $view->table_header, $rows);
}


function _exclude_message($mymessage, $mytype="status") {
  $flag = false;
  if ($messageArr = drupal_set_message()) {
    foreach($messageArr as $type=>$messages) {
      if ($mytype==$type) {
        foreach($messages as $key=>$message) {
          if ($mymessage==$message) {
            unset($_SESSION['messages'][$type][intval($key)]);
            $flag = true;
          }
        }
      }
      if (count($_SESSION['messages'][$type])==0) unset($_SESSION['messages'][$type]);
    }
  }
  return $flag;
}

function zen_status_messages($display = NULL) {
  if (_exclude_message('Your <em>OG Membership</em> has been created.')) {
    //drupal_set_message('override message here', 'status');
    drupal_set_message('', 'status');
  } else if (_exclude_message('The <em>OG Membership</em> has been updated.')) {
    //drupal_set_message('override message here', 'status');
    drupal_set_message('', 'status');
  }
  return theme_status_messages($display);
}
