<?php
   /*
   Plugin Name: Hide Core Update Notice
   Plugin URI: http://www.revaultmedia.com/plugins/hide-wordpress-update-notice
   Description: This plugin will remove the notice to update WordPress for users who can't update core.
   Version: 1.0
   Author: Revault Media
   Author URI: http://www.revaultmedia.com
   License: GPL2
   */

function hide_core_update_notice()
{
    if (!current_user_can('update_core')) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'hide_core_update_notice', 1 );