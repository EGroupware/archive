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

/**
 * Hooks for Benno Mail Archive
 */
class archive_hooks
{
	public static function csp_frame_src()
	{
		$setup_info = array();
		include EGW_SERVER_ROOT.'/archive/setup/setup.inc.php';

		return array(parse_url($setup_info['archive']['url'], PHP_URL_HOST));
	}
}