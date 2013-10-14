<?php
/**
 * EGroupware - MailArchive
 *
 * @link http://www.egroupware.org
 * @author Ralf Becker <rb@stylite.de>
 * @package archive
 * @copyright (c) 2013 by Ralf Becker <rb@stylite.de>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id$
 */

$GLOBALS['egw_info'] = array(
	'flags' => array(
		'currentapp'	=> 'archive',
		'noheader'		=> True,
		'nonavbar'		=> True,
	)
);
include('../header.inc.php');

common::egw_header();
parse_navbar();

$url = 'https://benno-web.stylite.de/benno/index.php?CA=greeting#';

// jdots already uses an iframe, so no need to create an other one
if ($GLOBALS['egw']->framework->template == 'jdots')
{
	echo "<script type='text/javascript'>\nwindow.setTimeout(\"location='$url';\",10);\n</script>\n";
}
else
{
	echo "\n".'<div style="width: 100%; height: 100%; min-width: 800px; height: 600px">';
	echo "\n\t".'<iframe src="'.$url.'" name="site" width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0"><a href="'.$site['site_url'].'">'.$site['site_url'].'</a></iframe>';
	echo "\n</div>\n";
}
