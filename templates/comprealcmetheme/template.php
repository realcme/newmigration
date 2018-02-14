<?php
// $Id: template.php,v 1.41 2010-08-12 21:19:41 psantini Exp $

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
 *   STARTERKIT_regions()
 * where STARTERKIT is the name of your sub-theme. For example, the zen_classic
 * theme would define a zen_classic_regions() function.
 *
 * For a sub-theme to add its own variables, instead of _phptemplate_variables,
 * use these functions:
 *   STARTERKIT_preprocess_page(&$vars)     to add variables to the page.tpl.php
 *   STARTERKIT_preprocess_node(&$vars)     to add variables to the node.tpl.php
 *   STARTERKIT_preprocess_comment(&$vars)  to add variables to the comment.tpl.php
 *   STARTERKIT_preprocess_block(&$vars)    to add variables to the block.tpl.php
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


/*
 * Add the stylesheets you will need for this sub-theme.
 *
 * To add stylesheets that are in the main Zen folder, use path_to_theme().
 * To add stylesheets thar are in your sub-theme's folder, use path_to_subtheme().
 */

// Add any stylesheets you would like from the main Zen theme.
//drupal_add_css(path_to_theme() .'/html-elements.css', 'theme', 'all');
drupal_add_css(path_to_theme() .'/tabs.css', 'theme', 'all');

// Then add styles for this sub-theme.
drupal_add_css(path_to_subtheme() .'/html-elements.css', 'theme', 'all');
//drupal_add_css(path_to_subtheme() .'/layout.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/icons.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/realcme.css', 'theme', 'all');

// Optionally add the fixed width CSS file.
if (theme_get_setting('zen_classic_fixed')) {
  drupal_add_css(path_to_subtheme() .'/zen-fixed.css', 'theme', 'all');
}

// Avoid IE5 bug that always loads @import print stylesheets
zen_add_print_css(path_to_subtheme() .'/print.css');

drupal_add_js(drupal_get_path('module', 'cmebase').'/js/allscripts.js?v=1');


/**
 * Declare the available regions implemented by this theme.
 *
 * @return
 *   An array of regions.
 */
function zen_classic_regions() {
  return array(
    'left' => t('left sidebar'),
    'right' => t('right sidebar'),
    'content_top' => t('content top'),
    'content_bottom' => t('content bottom'),
    'header' => t('header'),
    'footer' => t('footer'),
    'closure_region' => t('closure'),
  );
}


/**
 * Replace a menu text by an icon with roll-over effect.
 *
 * @param unknown_type $links
 * @return unknown
 */
function phptemplate_menu_links($links) {
  // Assumption: the icon are located under the directoy "box" under the theme
  $icon_base_path = get_cmecompanion_cdn_base_url().'/'.path_to_subtheme().'/box/';
  
  if (!count($links)) {
    return '';
  }
  $count = count($links);
  $level_tmp = explode('-', key($links));
  $level = $level_tmp[0];
  $output = "<ul id=\"primary\" class=\"links-$level\">\n";
  
  $i = 1;
  foreach ($links as $index => $link) {
    //error_log("title = ".$link['title']);
    $file_name = str_replace(' ', '_', strtolower($link['title']));
    $image_name = 'box-'.$file_name;
    
    $is_active = stristr($index, "active"); 
    if ($is_active) { 
      $file_name .= '_active';
    }    
    
    $image_src = '<img src="'.$icon_base_path.$file_name.'.gif" name="'.$image_name.'"/>';
    $output .= '<li class="';
    if ($i == 1) {
      $output .= 'first ';
    }
    else if (i == $count) {
      $output .= 'last ';
    }
    $output .= $index;
    $attributes = $link['attributes'];
    $a = '';
    if (!$is_active) {
      // Add roll over effects
      $attributes['onmouseover'] = "roll(xname, xover)";
      $attributes['onmouseout'] = "roll(xname, xnormal)";
    }
    if (!isset($attributes['title'])) {
      $attributes['title'] = $link['title'];
    }
    $a = l($image_src, $link['href'], $attributes, $link['query'], $link['fragment'], FALSE, TRUE);
    if (!$is_active) {
      $a = str_replace('xname', "'".$image_name."'", $a);
      $a = str_replace('xover', "'".$icon_base_path.$file_name.'_over.gif'."'", $a);
      $a = str_replace('xnormal', "'".$icon_base_path.$file_name.'.gif'."'", $a);
    }
    //$attributes  = array('onmouseover' => 'roll(\"sub_but\", \"movedown.gif\")');
   // onmouseover="roll('sub_but', 'movedown.gif')"
    $output .= '">'. $a ."</li>\n";
    $i++;
  }
  $output .= '</ul>';

  return $output;
}

function phptemplate_get_menu_section($links) {
  $file_name = '';
  $text = '';
  $alt = '';
  foreach ($links as $index => $link) {
     if (stristr($index, "active")) { 
       $file_name = str_replace(' ', '_', strtolower($link['title']));
       $text = $link['title'];
       $alt = $link['title'];
       break;
     }
  }
  if (empty($file_name)) {
    $file_name = 'profile';
  }
  if (empty($text)) {
    //$text = 'XXXXXX';
    $text = '';
  }
  if (empty($alt)) {
    $alt = $text;
  }
  $result = array(
    'icon' => get_cmecompanion_cdn_base_url().'/'.path_to_subtheme().'/images/icon-'.$file_name.'.gif',
    'text' => $text,
    'alt' => $alt,
  );
  return $result;
}


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
  return '<div class="breadcrumb">'. implode(' � ', $breadcrumb) .' �</div>';
}
// */


/**
 * Override or insert PHPTemplate variables into the page templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 */
/* -- Delete this line if you want to use this function
function zen_classic_preprocess_page(&$vars) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

function comprealcmetheme_preprocess_page(&$vars) {
  set_active_item();
  comprealcmetheme_removetab('Users', $vars);    // replace themename with your theme's name
  comprealcmetheme_removetab('Content', $vars); // replace themename with your theme's name
  comprealcmetheme_profile_renameviewtab($vars); // Rename profile tab
}



/**
 * Override or insert PHPTemplate variables into the node templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 */
/* -- Delete this line if you want to use this function
function zen_classic_preprocess_node(&$vars) {
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
function zen_classic_preprocess_comment(&$vars) {
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
function zen_classic_preprocess_block(&$vars) {
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
 * Also, use user's public name instead of private username.
 */
function zen_username($object) {

  if ($object->uid && $object->name) {
    $name = theme('user_public_name', $object);
    if (is_blank($name)) {
      $name = $object->name;
    }
    // Shorten the name when it is too long or it will break many tables.
    if (drupal_strlen($name) > 45) {
      $name = drupal_substr($object->name, 0, 40) .'...';
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

function phptemplate_embed_companion_js() {
  $parent_path = get_cmecompanion_parent_base_url();
  $s = '';
  // First script: determine if there is a parent window. If not, redirect
  $s .= "<script>"."\n";
  $s .= "  if (parent.location == window.location) {"."\n";
  $s .= "    window.location = '".$parent_path."'"."\n";
  $s .= "  }"."\n";
  $s .= "</script>"."\n";
  return $s;
}

function phptemplate_layout_js() {
  $s = '';
  // Second script: determine the height of the CME cmpanion window.
  $layout_path = base_path().path_to_subtheme();
  $s .= "<script>"."\n";
  $s .= "var screen_width = $.cookie('win_height');"."\n";
  $s .= 'if (screen_width <= 560) {'."\n";
  $s .= "  document.write('<'+'link rel=\"stylesheet\" href=\"".$layout_path."/layout-800.css\" />');"."\n";
  $s .= '}'."\n";
  $s .= 'else if (screen_width <= 740) {'."\n";
  $s .= "  document.write('<'+'link rel=\"stylesheet\" href=\"".$layout_path."/layout-1024.css\" />');"."\n";
  $s .= '} '."\n";
  $s .= 'else {'."\n";
  $s .= "  document.write('<'+'link rel=\"stylesheet\" href=\"".$layout_path."/layout.css\" />');"."\n";
  $s .= '}'."\n";
  $s .= "</script>"."\n";
  return $s;
}

function phptemplate_focus_js() {
  // Focus to the CMECompanion 
  $s = "
    <script>
      function compfocus(){
        // Focus on the first input field (search)
        $('input:first').focus();
      }
      $(function() {
        setTimeout('compfocus();',100);
      });
    </script>"."\n";
  return $s;
}

/*
 * Override program search to replace OG Join text with an icon
 */
/*
function theme_views_view_table_program_search($view, $nodes, $type) {
  $icon_base_path = base_path().'/'.path_to_subtheme().'/images/';
  $fields = _views_get_fields();

  foreach ($nodes as $node) {
    $row = array();
    foreach ($view->field as $field) {
      if ($fields[$field['id']]['visible'] !== FALSE) {
        $cell = array();
        $cell['class'] = "view-field ". views_css_safe('view-field-'. $field['queryname']);
        $cell['data'] = views_theme_field('views_handle_field', $field['queryname'], $fields, $field, $node, $view);
        if ($field['field'] == 'subscribe') {
          $cell['data'] = preg_replace('/Join/', '<img src="'.$icon_base_path.'plus.gif" />', $cell['data']);
        }
        $row[] = $cell;
      }
    }
    $rows[] = $row;
  }
  return theme('table', $view->table_header, $rows);
}
*/

function theme_views_view_table_program_search($view, $nodes, $type) {
  require_once(drupal_get_path('module', 'cmemembership').'/view-course-listing.inc');
  return course_listing_narrow($view, $nodes, $type);
}
function theme_views_view_table_planner_upcoming($view, $nodes, $type) {
  require_once(drupal_get_path('module', 'cmemembership').'/view-course-listing.inc');
  return course_listing_narrow($view, $nodes, $type);
}
function theme_views_view_table_tracker_open($view, $nodes, $type) {
  require_once(drupal_get_path('module', 'cmemembership').'/view-course-listing.inc');
  return course_listing_narrow($view, $nodes, $type);
}

/**
 * Theme a user page
 * @param $account the user object
 * @param $fields a multidimensional array for the fields, in the form of array (
 *   'category1' => array(item_array1, item_array2), 'category2' => array(item_array3,
 *    .. etc.). Item arrays are formatted as array(array('title' => 'item title',
 * 'value' => 'item value', 'class' => 'class-name'), ... etc.). Module names are incorporated
 * into the CSS class.
 *
 * @ingroup themeable
 */
function zen_user_profile($account, $fields) {
  //print_r($fields);
  $output = '<div class="profile">';
  $output .= theme('user_picture', $account);
  foreach ($fields as $category => $items) {
    if (strlen($category) > 0) {
      $output .= '<h2 class="title">'. check_plain($category) .'</h2>';
    }
    foreach ($items as $item) {
      if ($item['class'] == 'profile-profile_acceptpeersms') {
        $output .= '<div class="profile-field-name">Accept SMS:&nbsp;</div>';
        $output .= '<div class="profile-field-value">' . ($item['value'] == 'Accept SMS' ? 'Yes' : 'No') . '</div><div style="clear: both"></div>';
      }
      elseif ($item['title'] == 'Biography') {
        $output .= '<div class="profile-field-value profile-profile_biography">'.$item['value'] .'</div><div style="clear: both"></div>';
      }
      else {
        if (isset($item['title'])) {
          $output .= '<div class="profile-field-name">'. $item['title'] .':&nbsp;</div>';
        }
        $output .= '<div class="profile-field-value">'.$item['value'] .'</div><div style="clear: both"></div>';
      }
    }
    /*
    $output .= '<dl>';
    foreach ($items as $item) {
      if (isset($item['title'])) {
        $output .= '<dt class="'. $item['class'] .'">'. $item['title'] .'</dt>';
      }
      $output .= '<dd class="'. $item['class'] .'">'. $item['value'] .'</dd>';
    }
    $output .= '</dl>';
	*/
  }
  $output .= '</div>';

  return $output;
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
  } else if (_exclude_message('You have just used your one-time login link. It is no longer necessary to use this link to login. Please change your password.')) {
  	// override message
  	drupal_set_message('Thank you for logging in with your one-time log-in link. Please create a password below so you can enter this site in the future. You will utilize your email address and this password to login for all future visits.', 'status');
  }
  return theme_status_messages($display);
}

/**
   * This snippet catches the default login form and looks for an
   * user_login.tpl.php file in the theme folder
   */
function phptemplate_user_login($form) {
    return _phptemplate_callback('user_login', array('form' => $form));
}

/**
 * Highlights a tab
 */
function comprealcmetheme_removetab($label, &$vars) {  
  $tabs = explode("\n", $vars['tabs']);
  $vars['tabs'] = '';

  foreach($tabs as $tab) {
    if(strpos($tab, '>' . $label . '<') === FALSE) {
      $vars['tabs'] .= $tab . "\n";
    }
  }
}

function comprealcmetheme_profile_renameviewtab(&$vars) {  
  $tabs = explode("\n", $vars['tabs']);
  $vars['tabs'] = '';

  foreach($tabs as $tab) {
    if ((strpos($tab, '>View<') > 0) && (strpos($tab, '/user/'))) {
      $vars['tabs'] .= str_replace('>View<', '>Profile Summary<', $tab). "\n";
    } else {
      $vars['tabs'] .= $tab . "\n";
    }
  }
}


/**
 * Fix for menu location
 *
 */
function set_active_item() {
  $url = request_uri();
  // Map module internal paths to menu paths 
  $active_items = array(
    'privatemsg' => 'privatemsg',
//    'search/profile' => 'cmepeer/search',
    'cmepeerlist' => 'cmepeerlist',
    'peer' => 'cmepeer/search',
    'invite' => 'invite',
    'node' => 'cmeplanner/search',
    'message' => 'message',
    'cmepeer/search' => 'cmepeerlist',
    'cmepeer/about' => 'cmepeer/about',
    'search' => 'cmepeerlist',
    'user' => 'cmepeerlist',
    'cmesendsms' => 'cmesendsms',
    'cmemastery/curriculum' => 'cmemastery/curriculum',
    'cmemastery/viewmastery' => 'cmemastery/viewmastery',
    'cmeplanner/relactivities' => 'cmeplanner/search',
    'cmepicme/review' => 'cmepicme/review',
  );
  // Check against current url  
 foreach ($active_items as $item => $a) {
    if (url_starts_with_item($url, $item)) {
      menu_set_active_item($a);
      return;  
    }
  }
}

function url_starts_with_item($url, $item) {
  $s = base_path().$item.'/';
  $result = ($url == base_path().$item) || (( substr( $url, 0, strlen( $s ) ) === $s ));
  return $result;
}

function phptemplate_cmemessage_method_fields($form) {
  $output = '<div id="cmemessage-' . $form['#msg_method'] . '-method-fields" class="method-field">';
  if (isset($form['#title'])) {
    $output .= '<div class="method-field-title">' . $form['#title'] . '</div>';
  }
  $output .= '<div id="cmemessage-' . $form['#msg_method'] . '-method-mode-fieldset" class="method-mode-fieldset">';
  $rendered = array();
  foreach (array('to_peer', 'to_nonpeer') as $e) {
    $attrs = isset($form[$e]['#div_attrs']) ? $form[$e]['#div_attrs'] : array();
    if (isset($form[$e])) {
      $rendered[] = '<div ' . drupal_attributes($attrs) . '">' . drupal_render($form[$e]) . '</div>';
    }
  }
  $output .= implode("\n<div class=\"or\">or</div>\n", $rendered);
  $output .= "</div>\n</div>";
  return $output;
}

function phptemplate_cmemessage_privatemsg_nonpeer_method_fields($form) {
  $output = '<div id="cmemessage-' . $form['#msg_method'] . '-method-fields" class="method-field">';
  if (isset($form['#title'])) {
    $output .= '<div class="method-field-title">' . $form['#title'] . '</div>';
  }
  $output .= '<div id="cmemessage-' . $form['#msg_method'] . '-method-mode-fieldset" class="method-mode-fieldset">';
  $output .= '<div>' . drupal_render($form['to_nonpeer']) . '</div>';
  $output .= '<div>' . drupal_render($form['recipient_to_display']) . '</div>';
  $output .= "</div>\n</div>";
  return $output;
}

/*
 *  Format the name of the given $peer (a user object) so that it is suitable
 *  for the peer dropdown menu.
 */
function phptemplate_peer_name_for_dropdown($peer, $extra_text = '') {
  $max_size = 30;
  $output = theme('user_public_name', $peer) . ' ' . $extra_text;
  if ((! $peer) || (strlen($output) < $max_size)) {
    return $output;
  }
  // try to shorten
  $output_header = '';
  if ((isset($peer->profile_profession)) && ($peer->profile_profession == 'PHY')) {
    $output_header = 'Dr. ';
  }
  if ((isset($peer->profile_profession)) && ($peer->profile_profession == 'DO')) {
    $output_header = 'Dr. ';
  }	
  $output_fn = '';
  if ((isset($peer->profile_firstname)) && (! empty($peer->profile_firstname))) {
    $output_fn = $peer->profile_firstname;
  }
  $output_ln = '';
  if ((isset($peer->profile_lastname)) && (! empty($peer->profile_lastname))) {
    $output_ln = $peer->profile_lastname;
  }
  $sum = strlen($output_header) + strlen($output_ln) + strlen($extra_text);
  /*
	// In the following logic, the first name is truncated to a length that does not take the last name into account
  if (($sum + 6) < $max_size) {
    // we can get there by shortening the first name
    $output_fn = substr($output_fn, 0, $max_size - 4);
    return $output_header . $output_fn . '... ' . $output_ln . ' ' . $extra_text;
  }
  elseif (($sum + 4) < $max_size) {
    return $output_header . substr($output_fn, 0, 1) . '. ' . $output_ln . ' ' . $extra_text;
  }
  */
  if (($sum + 4) > $max_size) {
    // use only first letter of the first name, and truncate the whole thing if not enough
    return substr($output_header . substr($output_fn, 0, 1) . '. ' . $output_ln . ' ' . $extra_text, 0, ($max_size - 1));
  }
  // give up and just truncate the end
  return substr($output_header . substr($output_fn, 0, 1) . '. ' . $output_ln . ' ' . $extra_text, 0, ($max_size - 1));
}

// this is theme_select with a custom theme at the end
function phptemplate_cmemessage_peer_select($element) {
  $select = '';
  $size = $element['#size'] ? ' size="' . $element['#size'] . '"' : '';
  _form_set_class($element, array('form-select'));
  $multiple = isset($element['#multiple']) && $element['#multiple'];
  return theme('cmemessage_peer_element', $element, '<select name="'. $element['#name'] .''. ($multiple ? '[]' : '') .'"'. ($multiple ? ' multiple="multiple" ' : '') . drupal_attributes($element['#attributes']) .' id="'. $element['#id'] .'" '. $size .'>'. form_select_options($element) .'</select>');
}

// this is theme_form_element with some rearrangement of the HTML
function phptemplate_cmemessage_peer_element($element, $value) {
  $output  = '<div id="peer-user" class="form-item">'."\n";
  $required = !empty($element['#required']) ? '<span class="form-required" title="'. t('This field is required.') .'">*</span>' : '';

  if (!empty($element['#title'])) {
    $title = $element['#title'];
    if (!empty($element['#id'])) {
      $output .= ' <label for="'. $element['#id'] .'">'. t('!title: !required', array('!title' => filter_xss_admin($title), '!required' => $required)) ."</label>\n";
    }
    else {
      $output .= ' <label>'. t('!title: !required', array('!title' => filter_xss_admin($title), '!required' => $required)) ."</label>\n";
    }
  }

  $output .= '<div id="peer-selection-group">';
  $output .= " $value\n";
  $output .= $element['new_peer_link'] . '</div>';

  if (!empty($element['#description'])) {
    $output .= ' <div class="description">'. $element['#description'] ."</div>\n";
  }

  $output .= "</div>\n";
  return $output;
}

// This is just theme_textfield with a custom form_element theme at the end
function phptemplate_cmemessage_nonpeer_address_field($element) {
  $size = $element['#size'] ? ' size="' . $element['#size'] . '"' : '';
  $class = array('form-text');
  $extra = '';
  $output = '';
  
  if ($element['#autocomplete_path']) {
    drupal_add_js('misc/autocomplete.js');
    $class[] = 'form-autocomplete';
    $extra =  '<input class="autocomplete" type="hidden" id="'. $element['#id'] .'-autocomplete" value="'. check_url(url($element['#autocomplete_path'], NULL, NULL, TRUE)) .'" disabled="disabled" />';
  }
  _form_set_class($element, $class);

  if (isset($element['#field_prefix'])) {
    $output .= '<span class="field-prefix">'. $element['#field_prefix'] .'</span> ';
  }

  $output .= '<input type="text" maxlength="'. $element['#maxlength'] .'" name="'. $element['#name'] .'" id="'. $element['#id'] .'" '. $size .' value="'. check_plain($element['#value']) .'"'. drupal_attributes($element['#attributes']) .' />';

  if (isset($element['#field_suffix'])) {
    $output .= ' <span class="field-suffix">'. $element['#field_suffix'] .'</span>';
  }

  return theme('cmemessage_nonpeer_address_element', $element, $output). $extra;
}

// this is theme_form_element with a custom id on the surrounding div
function phptemplate_cmemessage_nonpeer_address_element($element, $value) {
    $output  = '<div id="nonpeer-address" class="form-item">'."\n";
  $required = !empty($element['#required']) ? '<span class="form-required" title="'. t('This field is required.') .'">*</span>' : '';

  if (!empty($element['#title'])) {
    $title = $element['#title'];
    if (!empty($element['#id'])) {
      $output .= ' <label for="'. $element['#id'] .'">'. t('!title: !required', array('!title' => filter_xss_admin($title), '!required' => $required)) ."</label>\n";
    }
    else {
      $output .= ' <label>'. t('!title: !required', array('!title' => filter_xss_admin($title), '!required' => $required)) ."</label>\n";
    }
  }

  $output .= " $value\n";

  if (!empty($element['#description'])) {
    $output .= ' <div class="description">'. $element['#description'] ."</div>\n";
  }

  $output .= "</div>\n";

  return $output;
}

function phptemplate_remove_from_cmepeerlist_link($peeruser) {
  return l(t('Remove %name from my @cmepeerlist', array('%name' => theme('user_public_name', $peeruser)) + cmepeerlist_translation()), 
           'peer/delete/' . $peeruser->uid, NULL, drupal_get_destination(), NULL, FALSE, TRUE);
}

function phptemplate_add_to_cmepeerlist_link($peeruser) {
  return l(t('Add %name to my @cmepeerlist', array('%name' => theme('user_public_name', $peeruser)) + cmepeerlist_translation()), 'peer/add/' . $peeruser->uid, NULL, drupal_get_destination(), NULL, FALSE, TRUE);
}

function phptemplate_cmepeerlist_pending_requests($id) {
  $thisuser = user_load(array('uid' => $id));
  drupal_set_title(t('@username\'s @cmepeerlist', array('@username' => theme('user_public_name', $thisuser)) + cmepeerlist_translation()));

  return theme('box', t('Received requests'), cmepeerlist_pending_requester_list($thisuser)) .
         theme('box', t('Sent requests'), cmepeerlist_pending_requested_list($thisuser));
}

function phptemplate_privatemsg_view($message) {
  global $user;

  if ($message) {
    $links = array();
    $body_invite_links = '';
    if ($invite_links = cmepeerlist_get_invite_links_for_privatemsg($message->id, $user)) {
      foreach ($invite_links as $k => $v) {
        if ($k == 'message') {
          $body_invite_links .= '<div class="invite-message">' . $v . '</span>';
        }
        else {
          $links[$k] = $v;
        }
      }
    }
    $author = user_load(array('uid' => $message->uid));
    $recipient = user_load(array('uid' => $message->recipient));
    $author_public_name = theme('user_public_name', $author);
    $recipient_public_name = theme('user_public_name', $recipient);
    if ($message->recipient == $user->uid) {
      $author_public_name = theme('user_profile_link', $author);
      if ($author->uid && (isset($author->privatemsg_allow) ? $author->privatemsg_allow : 1)) {
        $links['privatemsg_reply'] = array('title' => t('Reply to this message'), 'href' => CME_MESSAGE_REPLY_URL . '/' . $message->id);
      }
      else {
        $links['privatemsg_noreply'] = array('title' => t('Sender does not accept replies'), 'href' => NULL);
      }
    }
    elseif ($message->uid == $user->uid) {
      $recipient_public_name = theme('user_profile_link', $recipient);
    }
    $body = '
      <p><strong>'. t('From') .':</strong> '. $author_public_name .'<br />
      <strong>'. t('To') .':</strong> '. $recipient_public_name .'<br />
      <strong>'. t('Subject') .':</strong> ' . theme('cmepeerlist_privatemsg_subject', $message->subject, $message->id) . '<br />
      <strong>'. t('Date') .':</strong> '. format_date($message->timestamp) .'</p>
       <div class="privatemsgbody">
      '. check_markup($message->message, $message->format, FALSE) .'</div>' . $body_invite_links;
    $dest = $_GET['destination'];
    if (preg_match('/cmepeerlist\/\d+\/peers\/requests/', $dest)) {
      $links['back_to_peers'] = array('title' => t('Back to Pending Requests'), 'href' => $dest);
    }
    else {
      if ($message->recipient == $user->uid || variable_get('privatemsg_sent_status', 1)) {
        $links['privatemsg_delete'] = array('title' => t('Delete this message'), 'href' => CME_MESSAGE_URL . '/delete/'. $message->id, 'attributes' => array('onclick' => "return confirm('". t('Are you sure to delete this message?') ."')"));
      }
      $links['privatemsg_list'] = array('title' => t('List messages'), 'href' => ($message->recipient == $user->uid && $message->folder) ? CME_MESSAGE_URL . '/list/'. $message->folder : CME_MESSAGE_URL);
    }

    if ($message->id) {
      $body .= '<div class="links">'. theme('links', $links) .'</div>';
    }
  }
  else {
    drupal_set_message(t("Error: you can't read this message."), 'error');
    $body = '';
  }

  return $body;
}

function zen_password($element) {
  //print_r($element);
  $size = $element['#size'] ? ' size="'. $element['#size'] .'" ' : '';
  $maxlength = $element['#maxlength'] ? ' maxlength="'. $element['#maxlength'] .'" ' : '';

  _form_set_class($element, array('form-text'));
  if ($element['#id'] == 'edit-profile-license') {
    $output = '<input type="password" name="'. $element['#name'] .'" id="'. $element['#id'] .'" value="'. check_plain($element['#value']) .'" '. $maxlength . $size . drupal_attributes($element['#attributes']) .' />';
  } else {
    $output = '<input type="password" name="'. $element['#name'] .'" id="'. $element['#id'] .'" '. $maxlength . $size . drupal_attributes($element['#attributes']) .' />';
  }
  return theme('form_element', $element, $output);
}