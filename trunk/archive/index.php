<?php
/**
 * EGroupware - Benno Mail Archive
 *
 * @link http://www.egroupware.org
 * @author Ralf Becker <rb@stylite.de>
 * @package archive
 * @copyright (c) 2013/4 by Ralf Becker <rb@stylite.de>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id$
 */

$GLOBALS['egw_info'] = array(
	'flags' => array(
		'currentapp'	=> 'archive',
		'noheader'		=> false,
		'nonavbar'		=> false,
	)
);
include('../header.inc.php');

// get url from setup.inc.php
include EGW_SERVER_ROOT.'/archive/setup/setup.inc.php';

list($url) = explode('?', $setup_info['archive']['url']);	// remove ?CA=greeting
$src = $GLOBALS['egw_info']['server']['webserver_url'].'/archive/js/login.js';
$attrs = array(
	'CA' => 'login',
	'login[username]' => $GLOBALS['egw_info']['user']['account_email'],
	'login[password]' => $GLOBALS['egw_info']['user']['passwd'],
);

// jdots already uses an iframe, so no need to create an other one
if (is_a($GLOBALS['egw']->framework, 'jdots_framework') || $_GET['content'])
{
	// login.js creates a form with $attrs and posts it to $url
	echo '<script type="text/javascript" id="archive_login_js" src="'.$src.'" data-url="'.htmlspecialchars($url).
		'" data-attrs="'.htmlspecialchars(json_encode($attrs)).'"></script>';
}
else
{
	// et2_container class triggers automatic resize of iframe by idots.js
	echo "\n".'<div style="width: 100%; height: 100%; min-width: 800px;">';
	echo "\n\t".'<iframe src="'.$_SERVER['PHP_SELF'].'?content=1" class="et2_container" name="site" width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0"></iframe>';
	echo "\n</div>\n";
}
