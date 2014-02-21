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

// jdots already uses an iframe, so no need to create an other one
if ($GLOBALS['egw']->framework->template == 'jdots')
{
	echo "<script type='text/javascript'>\nwindow.setTimeout(\"location='".$setup_info['archive']['url']."';\",10);\n</script>\n";
}
else
{
	echo "\n".'<div style="width: 100%; height: 100%; min-width: 800px; height: 600px">';
	echo "\n\t".'<iframe src="'.$setup_info['archive']['url'].'" name="site" width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0"></iframe>';
	echo "\n</div>\n";
}
