<?php
// $Id: template.php,v 1.8 2010-01-20 16:49:06 psantini Exp $

/**
 * @file
 * File which contains theme overrides for the Zen theme.
 *
 * ABOUT
 *
 * The template.php file is one of the most useful files when creating or
 * modifying Drupal themes. You can add new regions for block content, modify or
 * override Drupal's theme functions, intercept or make additional variables
 * available to your theme, and create custom PHP logic. For more information,
 * please visit the Theme Developer's Guide on Drupal.org:
 * http://drupal.org/theme-guide
 *
 * NOTE ABOUT ZEN'S TEMPLATE.PHP FILE
 *
 * The base Zen theme is designed to be easily extended by its sub-themes. You
 * shouldn't modify this or any of the CSS or PHP files in the root zen/ folder.
 * See the online documentation for more information:
 *   http://drupal.org/node/193318
 */


/*
 * To make this file easier to read, we split up the code into managable parts.
 * Theme developers are likely to only be interested in functions that are in
 * this main template.php file.
 */

// Sub-theme support
include_once 'template-subtheme.php';

// Initialize theme settings
include_once 'theme-settings-init.php';

// Tabs and menu functions
include_once 'template-menus.php';


/**
 * Declare the available regions implemented by this theme.
 *
 * Regions are areas in your theme where you can place blocks. The default
 * regions used in themes are "left sidebar", "right sidebar", "header", and
 * "footer", although you can create as many regions as you want. Once declared,
 * they are made available to the page.tpl.php file as a variable. For instance,
 * use <?php print $header ?> for the placement of the "header" region in
 * page.tpl.php.
 *
 * By going to the administer > site building > blocks page you can choose
 * which regions various blocks should be placed. New regions you define here
 * will automatically show up in the drop-down list by their human readable name.
 *
 * @return
 *   An array of regions. The first array element will be used as the default
 *   region for themes. Each array element takes the format:
 *   variable_name => t('human readable name')
 */
function zen_regions() {
  // Allow a sub-theme to define its own regions.
  global $theme_key;
  if ($theme_key != 'zen') {
    $function = str_replace('-', '_', $theme_key) .'_regions';
    if (function_exists($function)) {
      return $function();
    }
  }

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


/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  $show_breadcrumb = theme_get_setting('zen_breadcrumb');
  $show_breadcrumb_home = theme_get_setting('zen_breadcrumb_home');
  $breadcrumb_separator = theme_get_setting('zen_breadcrumb_separator');
  $trailing_separator = theme_get_setting('zen_breadcrumb_trailing') ? $breadcrumb_separator : '';

  // Determine if we are to display the breadcrumb
  if ($show_breadcrumb == 'yes' || $show_breadcrumb == 'admin' && arg(0) == 'admin') {
    if (!$show_breadcrumb_home) {
      // Optionally get rid of the homepage link
      array_shift($breadcrumb);
    }
    if (!empty($breadcrumb)) {
      // Return the breadcrumb with separators
      return '<div class="breadcrumb">'. implode($breadcrumb_separator, $breadcrumb) ."$trailing_separator</div>";
    }
  }
  // Otherwise, return an empty string
  return '';
}


/*
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 * The most powerful function available to themers is _phptemplate_variables().
 * It allows you to pass newly created variables to different template (tpl.php)
 * files in your theme. Or even unset ones you don't want to use.
 *
 * It works by switching on the hook, or name of the theme function, such as:
 *   - page
 *   - node
 *   - comment
 *   - block
 *
 * By switching on this hook you can send different variables to page.tpl.php
 * file, node.tpl.php (and any other derivative node template file, like
 * node-forum.tpl.php), comment.tpl.php, and block.tpl.php.
 */


/**
 * Intercept template variables
 *
 * @param $hook
 *   The name of the theme function being executed (name of the .tpl.php file)
 * @param $vars
 *   A copy of the array containing the variables for the hook.
 * @return
 *   The array containing additional variables to merge with $vars.
 */
function _phptemplate_variables($hook, $vars = array()) {
  // Get the currently logged in user
  global $user, $theme_key;

  // Set a new $is_admin variable. This is determined by looking at the
  // currently logged in user and seeing if they are in the role 'admin'. The
  // 'admin' role will need to have been created manually for this to work this
  // variable is available to all templates.
  $vars['is_admin'] = in_array('admin', $user->roles);

  // Send a new variable, $logged_in, to tell us if the current user is
  // logged in or out. An anonymous user has a user id of 0.
  $vars['logged_in'] = ($user->uid > 0) ? TRUE : FALSE;

  switch ($hook) {
    case 'page':

      // This next block of code is to put the partner's name into the
      // title of the page.
      global $brand;
      global $realcme_cme_brands;
      $vars['head_title'] =
      	preg_replace('/'.variable_get('site_name', 'RealCME') .'/',
		     $realcme_cme_brands[$brand], $vars['head_title']);

      global $theme;
      // These next lines add additional CSS files and redefine
      // the $css and $styles variables available to your page template
      if ($theme == $theme_key) { // If we're in the main theme
        // Load the stylesheet for a liquid layout
        if (theme_get_setting('zen_layout') == 'border-politics-liquid') {
          drupal_add_css($vars['directory'] .'/layout-liquid.css', 'theme', 'all');
        }
        // Or load the stylesheet for a fixed width layout
        else {
          drupal_add_css($vars['directory'] .'/layout-fixed.css', 'theme', 'all');
        }
        drupal_add_css($vars['directory'] .'/html-elements.css', 'theme', 'all');
        drupal_add_css($vars['directory'] .'/tabs.css', 'theme', 'all');
        drupal_add_css($vars['directory'] .'/zen.css', 'theme', 'all');
        // Avoid IE5 bug that always loads @import print stylesheets
        $vars['head'] = zen_add_print_css($vars['directory'] .'/print.css');
      }
      // Optionally add the block editing styles.
      if (theme_get_setting('zen_block_editing')) {
        drupal_add_css($vars['directory'] .'/block-editing.css');
      }
      // Optionally add the wireframes style.
      if (theme_get_setting('zen_wireframes')) {
        drupal_add_css($vars['directory'] .'/wireframes.css', 'theme', 'all');
      }
      $vars['css'] = drupal_add_css();
      $vars['styles'] = drupal_get_css();

      // Allow sub-themes to have an ie.css file
      $vars['subtheme_directory'] = path_to_subtheme();

      // Don't display empty help from node_help().
      if ($vars['help'] == "<div class=\"help\"><p></p>\n</div>") {
        $vars['help'] = '';
      }

      // Classes for body element. Allows advanced theming based on context
      // (home page, node of certain type, etc.)
      $body_classes = array();
      $body_classes[] = ($vars['is_front']) ? 'front' : 'not-front';
      $body_classes[] = ($vars['logged_in']) ? 'logged-in' : 'not-logged-in';
      if ($vars['node']->type) {
        // If on an individual node page, put the node type in the body classes
        $body_classes[] = 'node-type-'. $vars['node']->type;
      }
      if ($vars['sidebar_left'] && $vars['sidebar_right']) {
        $body_classes[] = 'two-sidebars';
      }
      elseif ($vars['sidebar_left']) {
        $body_classes[] = 'one-sidebar sidebar-left';
      }
      elseif ($vars['sidebar_right']) {
        $body_classes[] = 'one-sidebar sidebar-right';
      }
      else {
        $body_classes[] = 'no-sidebars';
      }
      if (!$vars['is_front']) {
        // Add unique classes for each page and website section
        $path = drupal_get_path_alias($_GET['q']);
        list($section,) = explode('/', $path, 2);
        $body_classes[] = zen_id_safe('page-'. $path);
        $body_classes[] = zen_id_safe('section-'. $section);
        if (arg(0) == 'node') {
          if (arg(1) == 'add') {
            if ($section == 'node') {
              array_pop($body_classes); // Remove 'section-node'
            }
            $body_classes[] = 'section-node-add'; // Add 'section-node-add'
          }
          elseif (is_numeric(arg(1)) && (arg(2) == 'edit' || arg(2) == 'delete')) {
            if ($section == 'node') {
              array_pop($body_classes); // Remove 'section-node'
            }
            $body_classes[] = 'section-node-'. arg(2); // Add 'section-node-edit' or 'section-node-delete'
          }
        }
      }
      $vars['body_classes'] = implode(' ', $body_classes); // Concatenate with spaces

      // Remove the title for some specific node types
      $vars['breadcrumb_title'] = $vars['title'];
      if (arg(0) == 'node' && is_numeric(arg(1))) {
        $node = node_load(arg(1));
        if (in_array($node->type, array('promotional_content'))) {
          $vars['title'] = '';
        }
      }

      global $moodle_is_subframe;
      if ($moodle_is_subframe) {
        $vars['template_files'] = array('page-nodetype-forum');
        $moodle_is_subframe = FALSE;
      }
      // Add page template suggestions based on node type.
      elseif ($vars['node']) {
        $suggestions[] = 'page-nodetype-'. $vars['node']->type;
        // check to see if we're on the edit page
        $path = explode('/', $_GET['q']);
        if (!(arg(0) == 'node' && is_numeric(arg(1)) && arg(2) == 'edit')) {
            $vars['template_files'] = $suggestions;
        }
      }

      // ADD CUSTOM TABS WITH DESTINATION TO REPLACE ORIGINAL ONES THAT DON'T HAVE IT. TICKET #7546
      if(strpos($_SERVER['REQUEST_URI'], 'user')){
	$destination = isset($_GET['destination']) ? $_GET['destination'] : null;
	if($destination != null) {
	  $new = '';
	  $login = '';
	  $req = '';
	  if(strpos($_SERVER['REQUEST_URI'], 'user/register')) {
	    $new = ' class="active"';
	  } elseif(strpos($_SERVER['REQUEST_URI'], 'password')) {
	    $req = ' class="active"';
	  } else {
	    $login = ' class="active"';
	  }
	  $vars['tabs'] = '<ul class="tabs primary clear-block"><li' . $new . '><a href="/cms/user/register?destination=' . $destination . '"><span class="tab">Create new account</span></a></li>
<li' . $login . '><a href="/cms/user?destination=' . $destination . '" class="active"><span class="tab">Log in</span></a></li>
<li' . $req . '><a href="/cms/user/password?destination=' . $destination . '"><span class="tab">Request new password</span></a></li>
</ul>';
	}
      }

      break;

    case 'node':
      // Special classes for nodes
      $node_classes = array();
      if ($vars['sticky']) {
        $node_classes[] = 'sticky';
      }
      if (!$vars['node']->status) {
        $node_classes[] = 'node-unpublished';
        $vars['unpublished'] = TRUE;
      }
      else {
        $vars['unpublished'] = FALSE;
      }
      if ($vars['node']->uid && $vars['node']->uid == $user->uid) {
        // Node is authored by current user
        $node_classes[] = 'node-mine';
      }
      if ($vars['teaser']) {
        // Node is displayed as teaser
        $node_classes[] = 'node-teaser';
      }
      // Class for node type: "node-type-page", "node-type-story", "node-type-my-custom-type", etc.
      $node_classes[] = 'node-type-'. $vars['node']->type;
      $vars['node_classes'] = implode(' ', $node_classes); // Concatenate with spaces

      // Suggests templates per course tyoe
      if ($vars['node']->type == 'course') {
        $vars['template_files'] = array('node-course-'.canonize_course_type(get_course_type($vars['node'])));
      } else if ($vars['node']->type == 'activity_group') {
        $vars['template_files'] = array('node-activity_group-'.$vars['node']->field_group_type['0']['value']);
      }
      /*
      // Uncomment here to enable the ability to use a template for each node type displayed within a taxonomy listing
	  // for instance the file node-course-taxonomy.tpl.php would be used to display the course nodes listed within a taxonomy
      // otherwise the teaser listing is used.
      if (arg(0)== 'taxonomy') {
        $vars['template_files'] = array(
  			'node-taxonomy',
  			'node-'.$vars['node']->type.'-taxonomy',
        );
      }
	  */
      break;

    case 'comment':
      // We load the node object that the current comment is attached to
      $node = node_load($vars['comment']->nid);
      // If the author of this comment is equal to the author of the node, we
      // set a variable so we can theme this comment uniquely.
      $vars['author_comment'] = $vars['comment']->uid == $node->uid ? TRUE : FALSE;

      $comment_classes = array();

      // Odd/even handling
      static $comment_odd = TRUE;
      $comment_classes[] = $comment_odd ? 'odd' : 'even';
      $comment_odd = !$comment_odd;

      if ($vars['comment']->status == COMMENT_NOT_PUBLISHED) {
        $comment_classes[] = 'comment-unpublished';
        $vars['unpublished'] = TRUE;
      }
      else {
        $vars['unpublished'] = FALSE;
      }
      if ($vars['author_comment']) {
        // Comment is by the node author
        $comment_classes[] = 'comment-by-author';
      }
      if ($vars['comment']->uid == 0) {
        // Comment is by an anonymous user
        $comment_classes[] = 'comment-by-anon';
      }
      if ($user->uid && $vars['comment']->uid == $user->uid) {
        // Comment was posted by current user
        $comment_classes[] = 'comment-mine';
      }
      $vars['comment_classes'] = implode(' ', $comment_classes);

      // If comment subjects are disabled, don't display 'em
      if (variable_get('comment_subject_field', 1) == 0) {
        $vars['title'] = '';
      }

      break;

    case 'block':
      $block = $vars['block'];

      // Special classes for blocks
      $block_classes = array();
      $block_classes[] = 'block-'. $block->module;
      $block_classes[] = 'region-'. $vars['block_zebra'];
      $block_classes[] = $vars['zebra'];
      $block_classes[] = 'region-count-'. $vars['block_id'];
      $block_classes[] = 'count-'. $vars['id'];
      $vars['block_classes'] = implode(' ', $block_classes);

      if (theme_get_setting('zen_block_editing') && user_access('administer blocks')) {
        // Display 'edit block' for custom blocks
        if ($block->module == 'block') {
          $edit_links[] = l('<span>'. t('edit block') .'</span>', 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('edit the content of this block'), 'class' => 'block-edit'), drupal_get_destination(), NULL, FALSE, TRUE);
        }
        // Display 'configure' for other blocks
        else {
          $edit_links[] = l('<span>'. t('configure') .'</span>', 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('configure this block'), 'class' => 'block-config'), drupal_get_destination(), NULL, FALSE, TRUE);
        }

        // Display 'administer views' for views blocks
        if ($block->module == 'views' && user_access('administer views')) {
          $edit_links[] = l('<span>'. t('edit view') .'</span>', 'admin/build/views/'. $block->delta .'/edit', array('title' => t('edit the view that defines this block'), 'class' => 'block-edit-view'), drupal_get_destination(), 'edit-block', FALSE, TRUE);
        }
        // Display 'edit menu' for menu blocks
        elseif (($block->module == 'menu' || ($block->module == 'user' && $block->delta == 1)) && user_access('administer menu')) {
          $edit_links[] = l('<span>'. t('edit menu') .'</span>', 'admin/build/menu', array('title' => t('edit the menu that defines this block'), 'class' => 'block-edit-menu'), drupal_get_destination(), NULL, FALSE, TRUE);
        }
        $vars['edit_links_array'] = $edit_links;
        $vars['edit_links'] = '<div class="edit">'. implode(' ', $edit_links) .'</div>';
      }

      break;
  }


  // Allow a sub-theme to add or alter variables.
  $function = $theme_key .'_preprocess_'. $hook;
  if (function_exists($function)) {
    $function($vars);
  }
  else {
    $function = 'phptemplate_preprocess_'. $hook;
    if (function_exists($function)) {
      $function($vars);
    }
  }

  // The following is a deprecated function included for backwards compatibility
  // with Zen 5.x-0.8 and earlier. New sub-themes should not use this function.
  if (function_exists('zen_variables')) {
    $vars = zen_variables($hook, $vars);
  }

  _zen_hook($hook); // Add support for sub-theme template files.

  return $vars;
}

/**
 * Converts a string to a suitable html ID attribute.
 *
 * - Preceeds initial numeric with 'n' character.
 * - Replaces any character except A-Z, numbers, and underscores with dashes.
 * - Converts entire string to lowercase.
 * - Works for classes too!
 *
 * @param $string
 *   The string
 * @return
 *   The converted string
 */
function zen_id_safe($string) {
  if (is_numeric($string{0})) {
    // If the first character is numeric, add 'n' in front
    $string = 'n'. $string;
  }
  return strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
}

/**
 * Adds a print stylesheet to the page's $head variable.
 *
 * This is a work-around for a serious bug in IE5 in which it loads print
 * stylesheets for screen display when using an @import method, Drupal's default
 * method when using drupal_add_css().
 *
 * @param $url
 *   The URL of the print stylesheet
 * @return
 *   All the rendered links for the $head variable
 */
function zen_add_print_css($url) {
  global $base_path;
  return drupal_set_html_head(
    '<link'.
    drupal_attributes(
      array(
        'rel' => 'stylesheet',
        'href' => $base_path . $url,
        'type' => 'text/css',
        'media' => 'print',
      )
    ) ." />\n"
  );
}


/**
 * Format the forum body for output as part of a Moodle course page.
 *
 * Override the theming function from og_forum module, stripping out some of its functionality.
 *
 * @ingroup themeable
 */
function phptemplate_og_forum_display($forums, $topics, $parents, $tid, $sortby, $forum_per_page) {
  global $user;
  // forum list, topics list, topic browser and 'add new topic' link
  if (count($forums) || count($parents)) {
    $output  = '<div id="forum">';
    $output .= '<ul class="add-topic-links">';
    if (user_access('create forum topics') && !in_array($tid, variable_get('forum_containers', array())) && ($tid != 0)) {
      og_forum_set_og_group_context_from_tid($tid);
      $gid = og_forum_gid_from_tid($tid);
      //group forum link with group selected
      if (!empty($gid) && array_key_exists($gid, $user->og_groups)) {//make sure only group members are shown this link
        $output .= '<li>' .l(t('Add a new discussion topic.'), "node/add/forum/$tid/subframe", array() , "gids[]=$gid"). '</li>';
      }
      elseif (empty($gid)) {//normal forum, not in group
        $output .= '<li>' .l(t('Add a new discussion topic.'), "node/add/forum/$tid/subframe"). '</li>';
      }
    }
    elseif (user_access('create forum topics')) {
//      $output .= '<li>' .t('Select a forum below.'). '</li>';
    }
    elseif ($user->uid) {
//      $output .= '<li>' .t('You are not allowed to post a new forum topic.'). '</li>';
    }
    else {
//      $output .= '<li>' .t('<a href="@login">Login</a> to post a new forum topic.', array('@login' => url('user/login', drupal_get_destination()))). '</li>';
    }
    $output .= '</ul>';
    // disable the following line for now - we only have one forum per group at the moment,
    // and we will have to decide how to theme it if we want more than one.
//    $output .= theme('og_forum_list', $forums, $parents, $tid);
    if ($tid && !in_array($tid, variable_get('forum_containers', array()))) {
      $output .= theme('og_forum_topic_list', $tid, $topics, $sortby, $forum_per_page, $gid);
    }
    $output .= '</div>';
  }
  else {
    $output = t('No forums defined or you don\'t have permission to view them.');
  }
  return $output;
} // function phptemplate_og_forum_display()

/**
 * Format the topic listing.
 *
 * Override the theming function from og_forum module
 *
 * @ingroup themeable
 */
function phptemplate_og_forum_topic_list($tid, $topics, $sortby, $forum_per_page, $gid) {
  global $forum_topic_list_header, $user;
  drupal_add_css(drupal_get_path('module', 'moodle') . '/moodle-drupal.css');
  if ($topics) {
    foreach ($topics as $topic) {
      // folder is new if topic is new or there are new comments since last visit
      if ($topic->tid != $tid) {
        $rows[] = array(
          array('data' => check_plain($topic->title), 'class' => 'title'),
          array('data' => l(t('This topic has been moved'), "forum/$topic->tid"), 'colspan' => '3')
        );
      }
      else {
        $sql = "SELECT oa.nid, oa.is_public FROM {node} n INNER JOIN {og_ancestry} oa ON oa.nid = n.nid WHERE n.type = 'forum' AND n.nid = %d";
        $public_post = db_fetch_object(db_query($sql, $topic->nid));
        if (isset($public_post) && $public_post->is_public == 1 && !array_key_exists($gid, $user->og_groups)) {
          $rows[] = array(
            array('data' => l($topic->title, "node/$topic->nid", array('class' => 'topic-link'), NULL, NULL, FALSE, TRUE), 'class' => 'topic'),
            array('data' => $topic->num_comments. ($topic->new_replies ? '<br />' .l(format_plural($topic->new_replies, '1 new', '@count new'), "node/$topic->nid", array('class' => 'topic-link'), NULL, 'new') : ''), 'class' => 'replies'),
            array('data' => realcme_forum_format($topic), 'class' => 'created'),
            array('data' => realcme_forum_format(isset($topic->last_reply) ? $topic->last_reply : NULL), 'class' => 'last-reply')
          );
        }
        elseif (isset($public_post) && $public_post->is_public == 0 && !array_key_exists($gid, $user->og_groups)) {
          $rows[] = array(
            array('data' => l($topic->title, "node/$topic->nid", array('class' => 'topic-link'), NULL, NULL, FALSE, TRUE), 'class' => 'topic'),
            array('data' => $topic->num_comments. ($topic->new_replies ? '<br />' .l(format_plural($topic->new_replies, '1 new', '@count new'), "node/$topic->nid", array('class' => 'topic-link'), NULL, 'new') : ''), 'class' => 'replies'),
            array('data' => realcme_forum_format($topic), 'class' => 'created'),
            array('data' => realcme_forum_format(isset($topic->last_reply) ? $topic->last_reply : NULL), 'class' => 'last-reply')
          );
        }
        elseif (isset($public_post)) {//if the user is a group member, hide the public/private indicators
          $rows[] = array(
            array('data' => l($topic->title, "node/$topic->nid", array('class' => 'topic-link'), NULL, NULL, FALSE, TRUE), 'class' => 'topic'),
            array('data' => $topic->num_comments. ($topic->new_replies ? '<br />' .l(format_plural($topic->new_replies, '1 new', '@count new'), "node/$topic->nid", array('class' => 'topic-link'), NULL, 'new') : ''), 'class' => 'replies'),
            array('data' => realcme_forum_format($topic), 'class' => 'created'),
            array('data' => realcme_forum_format(isset($topic->last_reply) ? $topic->last_reply : NULL), 'class' => 'last-reply')
          );
        }
        else {//non-group forum topics
          $rows[] = array(
            array('data' => l($topic->title, "node/$topic->nid", array(), NULL, NULL, FALSE, TRUE), 'class' => 'topic'),
            array('data' => $topic->num_comments. ($topic->new_replies ? '<br />' .l(format_plural($topic->new_replies, '1 new', '@count new'), "node/$topic->nid", array('class' => 'topic-link'), NULL, 'new') : ''), 'class' => 'replies'),
            array('data' => realcme_forum_format($topic), 'class' => 'created'),
            array('data' => realcme_forum_format(isset($topic->last_reply) ? $topic->last_reply : NULL), 'class' => 'last-reply')
          );
        }
      }
    }
  }
  $output = theme('moodle_forum_table', _realcme_alter_forum_topic_headers($forum_topic_list_header), $rows, array('class' => 'moodle-forum-topic-list'));
  $output .= theme('pager', NULL, $forum_per_page, 0);
  return $output;
} // function phptemplate_og_forum_topic_list()


/**
 * Format a topic for display in the RealCME fashion.
 */
function realcme_forum_format($topic) {
  if ($topic && $topic->timestamp) {
    $user = user_load(array('uid' => $topic->uid));
    return t('!author<br />@time ago', array('@time' => format_interval(time() - $topic->timestamp), '!author' => theme('user_profile_popup_link', $user)));
  }
  else {
    return t('n/a');
  }
}

/**
 * Change the names in the topic headers.
 */
function _realcme_alter_forum_topic_headers($headers) {
  $result = array();
  foreach ($headers as $header) {
    switch ($header['field']) {
      case 'n.title':
        $header['data'] = t('Discussion');
        break;
      case 'l.comment_count':
        $header['data'] = t('Replies');
        break;
      case 'n.created':
        $header['data'] = t('Started by');
        break;
      case 'l.last_comment_timestamp':
        $header['data'] = t('Last Post');
        break;
    }
    $result[] = $header;
  }
  // take out the first element, which is used for icons that we aren't using
  array_shift($result);
  return $result;
}

// A custom version of theme_table without the sorting features.
function phptemplate_moodle_forum_table($header, $rows, $attributes = array(), $caption = NULL) {
  $output = '<table'. drupal_attributes($attributes) .">\n";

  if (isset($caption)) {
    $output .= '<caption>'. $caption ."</caption>\n";
  }

  // Format the table header:
  if (count($header)) {
    // HTML requires that the thead tag has tr tags in it follwed by tbody
    // tags. Using ternary operator to check and see if we have any rows.
    $output .= (count($rows) ? ' <thead><tr>' : ' <tr>');
    foreach ($header as $cell) {
      $output .= _theme_table_cell($cell, TRUE);
    }
    // Using ternary operator to close the tags based on whether or not there are rows
    $output .= (count($rows) ? " </tr></thead>\n" : "</tr>\n");
  }

  // Format the table rows:
  if (count($rows)) {
    $output .= "<tbody>\n";
    $flip = array('even' => 'odd', 'odd' => 'even');
    $class = 'even';
    foreach ($rows as $number => $row) {
      $attributes = array();

      // Check if we're dealing with a simple or complex row
      if (isset($row['data'])) {
        foreach ($row as $key => $value) {
          if ($key == 'data') {
            $cells = $value;
          }
          else {
            $attributes[$key] = $value;
          }
        }
      }
      else {
        $cells = $row;
      }

      // Add odd/even class
      $class = $flip[$class];
      if (isset($attributes['class'])) {
        $attributes['class'] .= ' '. $class;
      }
      else {
        $attributes['class'] = $class;
      }

      // Build row
      $output .= ' <tr'. drupal_attributes($attributes) .'>';
      $i = 0;
      foreach ($cells as $cell) {
        $output .= _theme_table_cell($cell);
      }
      $output .= " </tr>\n";
    }
    $output .= "</tbody>\n";
  }

  $output .= "</table>\n";
  return $output;
}