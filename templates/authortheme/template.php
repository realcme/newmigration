<?php
// $Id: template.php,v 1.38 2010-08-16 16:06:32 scott Exp $

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

drupal_add_css(path_to_subtheme() .'/css/rcm_reset.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_base.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_layout.css', 'theme', 'all');
drupal_add_css(path_to_subtheme() .'/css/rcm_thickbox.css', 'theme', 'all');


// Avoid IE5 bug that always loads @import print stylesheets
zen_add_print_css(path_to_subtheme() .'/print.css');

// Javascript
drupal_add_js(drupal_get_path('module', 'cmebase').'/js/allscripts.js?v=1');

// Javascript for global tool
if (strpos($_SERVER['REQUEST_URI'], 'globaltool/')) {
  global $partner_nid;
  drupal_add_js(drupal_get_path('module', 'cmeglobaltool').'/jquery.cmeglobaltool.js?v=1');
  drupal_add_js(drupal_get_path('module', 'cmeauthor').'/js/paste.cmeauthor.js');

  if (in_array('use_ckeditor', cmeauthoradmin_get_partner_at_options())) {
  	drupal_add_js(drupal_get_path('module', 'cmeauthor').'/ckeditor/ckeditor.js');
  	drupal_add_js(drupal_get_path('module', 'cmeauthor').'/ckeditor/config.js');
  	drupal_add_js(drupal_get_path('module', 'cmeauthor').'/ckfinder/ckfinder.js');
  	drupal_add_js(drupal_get_path('module', 'cmeauthor').'/ckfinder/config.js');
	 	$ckfinder_base = base_path() . drupal_get_path('module', 'cmeauthor'). '/ckfinder/';
	 	drupal_add_js(array( 'ckfinder_base' => $ckfinder_base ), 'setting');
  } else {
  	drupal_add_js(drupal_get_path('module', 'fckeditor').'/fckeditor/fckeditor.js');
  }
  drupal_add_js(array( 'cmsdata' => basename(variable_get('file_directory_path', DEFAULT_CMSDATA)) ), 'setting');

  $imgpath = base_path() . drupal_get_path('theme', 'authortheme') . "/img";
  // 'resourceNode' identifies what (course node or partner node) owns the images, videos, audios that may be uploaded via fckeditors
  drupal_add_js(array( 'partnerNode' => $partner_nid, 'resourceNode' => $partner_nid, 'imgpath' => $imgpath ), 'setting');
  jquery_form_add();
}

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
      // open the CME companion to the given adress
    $s .= "tb_show('', '".$openurl."', '');"."\n";
    $s .= '});'."\n";
    $s .= "</script>"."\n";
  }
  return $s;
}

function phptemplate_toolkit_js() {
  $path = base_path().path_to_subtheme().'/img/';
  $s = "
<script type='text/javascript'><!--//--><![CDATA[//><!--
  $(document).ready(function() {
    var toolkit_images = [ 'curriculum_mo.gif', 'picmelite_mo.gif', 'faculty_mo.gif', 'learning_objectives_mo.gif', 'quality_measures_mo.gif', 'consultants_mo.gif', 'patients_mo.gif',
      'series_mo.gif', 'surveys_mo.gif',  'references_mo.gif', 'front_matter_mo.gif', 'evaluation_questions_mo.gif', 'user_accounts_mo.gif', 'metrics_mo.gif',
      'cme_activities_home_mo.gif', 'create_new_activity_mo.gif', 'create_new_activity_dis.gif', 'cancel_mo.gif', 'cancel_dis.gif', 'delete_mo.gif', 'delete_dis.gif',
      'cme_template_builder_mo.gif' ];
    $.preload( toolkit_images, {
      base: '$path',
      ext:''
    });
  });
//--><!]]></script>
  ";
  return $s;
}

/**
 * Sorts nodes for the authoring activities view  ...
 * @param $node1
 * @param $node2
 */
function authoractivities_sort($node1, $node2) {
	global $authoractivities_info_array;

	$info1 = $authoractivities_info_array[$node1->nid];
	$info2 = $authoractivities_info_array[$node2->nid];
	if ($info1['published'] == $info2['published']) {
		// both published or not, so compare computed titles
		return strcmp($info1['title'], $info2['title']);
	} else {
		// published comes last
		return $info1['published'] ? 1 : -1;
	}
}

function theme_views_view_table_authoractivities($view, $nodes, $type) {

	global $authoractivities_info_array;

  $icon_type_base_path = base_path().drupal_get_path('module', 'moodle').'/img/';
  $img_base_path = base_path().path_to_subtheme() .'/img/';
  $fields = _views_get_fields();
  $can_delete = cmeauthoradmin_can_delete_course();
  $can_import = FALSE; // acess done on a per-activity basis (leader only)
  $can_export = FALSE; // acess done on a per-activity basis (leader only)

  // pre-generate some values that we'll need in order to intelligently sort this view (defect #1534)
  $authoractivities_info_array = array();
  foreach ($nodes as $node) {
    $activitytype = $node->node_type;
    $fmnid = $node->node_data_field_front_matter_field_front_matter_nid;
    $title = $node->node_title;
    $published = $node->node_data_field_activity_status_field_activity_status_value == 10;
    $cat = '';
    foreach ($view->field as $field) {
      if ($field['label'] == 'Category') {
        $cat = views_theme_field('views_handle_field', $field['queryname'], $fields, $field, $node, $view);
        break;
      }
    }
    $authoractivities_info_array[$node->nid] = array(
      'activitytype' => $activitytype,
      'category' => $cat,
      'fmnid' => $fmnid,
      'title' => $title,
      'published' => $published);
  }

  // now that we have display titles, we can sort the list properly
  usort($nodes, 'authoractivities_sort');

  $use_course_editor = in_array('allow_content_editor', cmeauthoradmin_get_partner_at_options());

  foreach ($nodes as $node) {
    // Find title and topic
    $info = $authoractivities_info_array[$node->nid];
    $activitytype = $info['activitytype'];
    $cat = $info['category'];
    $fmnid = $info['fmnid'];
    $title = $info['title'];

    $prepub_url = "";
    if (module_exists('cmearchive')) {
     $prepub_url = cmearchive_default_prepublished_activity_url($node->nid, $node->node_data_field_prepublished_activity_field_prepublished_activi);
    }

    if ($node->node_data_field_activity_status_field_activity_status_value == 10) {
      $course_status = 'published';
    } else {
      $course_status = 'edit';
    }
    $row = array();
    $row['class'] = $course_status;
    $row['data'] = array();
    foreach ($view->field as $field) {
      $cell = array();
      $cell['class'] = "view-field ". views_css_safe('view-field-'. $field['queryname']);
      if ($field['field'] == 'type') {
        // Skip - but we need the field node type for logic to pen builder or not
        /*
        $act = get_activity_by_type($activitytype);
        if ($activitytype == NODE_TYPE_COURSE_TEMPLATED || $activitytype == NODE_TYPE_COURSE_TEMPLATED_PLUS) {
          if ($cat) {
            $course_type_prefix = canonize_course_type($cat);
            $data = $cat;
            if ($activitytype == NODE_TYPE_COURSE_TEMPLATED_PLUS) {
              $course_type_prefix .= 'plus';
              $data .= ' Plus';
            }
          } else {
            $course_type_prefix = $act['name'];
            $data = $act['title'];
          }
        } else {
          $course_type_prefix = $act['name'];
          $data = $act['title'];
        }
        $logoname = $course_type_prefix.'logo-sm.gif';
        $coursetype = '<img src="'.$icon_type_base_path.$logoname.'" alt="'.$data.'" title="'.$data.'" height="20px" width="20px"/>';
        $cell['data'] = $coursetype;
        $cell['valign'] = 'middle';
        $cell['align'] = 'center';
        $row['data'][] = $cell;
        */
     } else if ($field['label'] == 'Activity') {
        $data = $title;
        $cell['data'] = l($data, 'node/'.$fmnid);
        if ($use_course_editor && cmebuilder_can_edit_structure($node->node_type)) {
       		$cell['data'] = l($data, 'builder/'.$fmnid);
        }
        $cell['align'] = 'left';
        $row['data'][] = $cell;
     } else if ($field['label'] == 'Prepublished' || $field['label'] == 'Front Matter' || $field['label'] == 'Category') {
        //skip
     } else if ($field['field'] == 'field_activity_status_value') {
        $url = 'node/'.$fmnid;
        if ($use_course_editor && cmebuilder_can_edit_structure($node->node_type)) {
       		$url = 'builder/'.$fmnid;
        }
        // Edit
        $data = '<a href="'.$url.'"><img src="'.$img_base_path.'course_status_'.$course_status.'.gif" alt="'.$course_status.'" title="'.$course_status.'" /></a>';

        // Builder editor, maybe
        /*
        if (!$use_course_editor && in_array('allow_structure_editor', cmeauthoradmin_get_partner_at_options())) {
        	if (cmebuilder_can_edit_structure($node->node_type)) {
        		$builder_url = base_path().'builder/'.$fmnid;
        		$src = $img_base_path.'cme_template_builder.gif';
        		$data .= "<a href='$builder_url'><img class='activity_listing_builder' src='$src' alt='Edit Structure' title='Edit Structure' /></a>";
        	} else {
        		$data .= "<span class='activity_listing_builder-disabled'>&nbsp</span>";
        	}
        }*/

        // Delete
        if ($course_status != 'published' && $can_delete) {
          $delete_url = base_path().'cmeauthor/delete_course/'.$node->nid;
          $src = $img_base_path.'delete_activity.gif';
          $data .= "<a href='$delete_url'><img class='activity_listing_delete' src='$src' alt='Delete Activity' title='Delete Activity' /></a>";
        } else {
          $data .= "<span class='activity_listing_delete-disabled'>&nbsp</span>";
        }
        // Preview - everyone can preview once they have access to the activity
        if ($prepub_url) {
          $src = $img_base_path.'prepublished_activity.gif';
          $data .= "<a href='$prepub_url'><img class='activity_listing_prepublished' src='$src' alt='Latest Preview Activity' title='Latest Preview Activity' /></a>";
        } else {
          $data .= "<span class='activity_listing_prepublished-disabled'>&nbsp</span>";
        }
        if ($can_import) {
          $import_url = base_path().'importdocx/'.$node->nid;
          $src = $img_base_path.'importdocx.gif';
          $data .= "<a href='$import_url'><img class='activity_listing_importdocx' src='$src' alt='docx>' title='".IMPORT_WORD."' /></a>";
        }
        if ($can_export) {
          $export_url = base_path().'exportdocx/'.$node->nid;
          $src = $img_base_path.'exportdocx.gif';
          $data .= "<a href='$export_url'><img class='activity_listing_exportdocx' src='$src' alt='>docx' title='".EXPORT_WORD."' /></a>";
        }
        $cell['data'] = $data;
        $cell['align'] = 'left';
        $cell['nowrap'] = 'nowrap';
        $row['data'][] = $cell;
      } else {
        $data = views_theme_field('views_handle_field', $field['queryname'], $fields, $field, $node, $view);
        $cell['data'] = $data;
        $cell['valign'] = 'middle';
        $row['data'][] = $cell;
      }
    }
    $rows[] = $row;
  }
  array_pop($view->table_header); // remove last 3 columns
  array_pop($view->table_header); // remove last 3 columns
  array_pop($view->table_header); // remove last 3 columns
  $output = theme('table', $view->table_header, $rows);
  $create = '';
  if (cmeauthoradmin_can_create_course()) {
    $create = theme('create_activity');
  }
  if (cmeauthoradmin_can_access_dashboard()) {
    $dashboard_url = cmedashboard_url('at', 'embed', 10);
    $dashboard_icon = "<a id='btn-dashboard' title='Dashboard' href='$dashboard_url'><span>Dashboard</span></a>";
    $create .= "<div style='clear: both;margin: 10px 10px 20px 10px'>
    <br/>$dashboard_icon
    <div style=\"padding-top: 8px\">We're introducing a new administration dashboard, preview it <a href='$dashboard_url'>here</a></div>
    </div>";
  }
  if ($view->use_pager && 0 < $view->nodes_per_page && $view->total_rows > $view->nodes_per_page) {
    // pager
   $output .= $create;
  } else {
    // no pager
   $output .= "<div class='nopager'>$create</div>";
  }
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
  }
  return theme_status_messages($display);
}


function zen_comment($comment, $links = array()) {
  $user = user_load(array('uid'=> $comment->uid));
  $output  = '<div class="comment'. ($comment->status == COMMENT_NOT_PUBLISHED ? ' comment-unpublished' : '') .'">';
  $output .= '<div class="comment_date">'. date_db_to_text($comment->timestamp) ."</div>\n";
  $output .= '<div class="body">'. $comment->comment .'</div>';
  $output .= '<div class="credit">'. $user->profile_firstname.' '.$user->profile_lastname ."</div>\n";
  $output .= '</div>';
  return $output;
}

