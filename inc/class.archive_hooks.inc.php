<?php
/**
 * EGroupware - Benno Mail Archive
 *
 * @link http://www.egroupware.org
 * @author Ralf Becker <rb@egroupware.org>
 * @package archive
 * @copyright (c) 2013-19 by Ralf Becker <rb@egroupware.org>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 */

use EGroupware\Api;
use EGroupware\Api\Egw;

/**
 * Hooks for Benno Mail Archive
 */
class archive_hooks
{
	/**
	 * Get archive configuratione either from regular EGroupware configuration or if not set from archive/setup/setup.inc.php
	 *
	 * Also called from "site configuration" to set defaults.
	 *
	 * @return array with values for keys "archive_url" and "archive_auth"
	 */
	static function config()
	{
		if (!($config = Api\Config::read('archive')) || empty($config['archive_url']) || empty($config['archive_auth']))
		{
			$setup_info = array();
			include EGW_SERVER_ROOT.'/archive/setup/setup.inc.php';

			foreach(array(
				'archive_url' => $setup_info['archive']['url'],
				'archive_auth' => $setup_info['archive']['auth'],
			) as $name => $value)
			{
				if (empty($config[$name]))
				{
					Api\Config::save_value($name, $config[$name] = $value, 'archive');
				}
			}
		}
		return $config;
	}

	/**
	 *
	 * @return array
	 */
	public static function csp_frame_src()
	{
		$config = self::config();

		$frm_srcs = array();
		if (($host = parse_url($config['archive_url'], PHP_URL_HOST)))
		{
			$frm_srcs[] = $host;
		}
		return $frm_srcs;
	}

	/**
	 * hooks to build Archive's sidebox-menu plus the admin and preferences sections
	 *
	 * @param string/array $args hook args
	 */
	static function all_hooks($args)
	{
		$location = is_array($args) ? $args['location'] : $args;

		if ($GLOBALS['egw_info']['user']['apps']['admin'])
		{
			$file = Array(
				'Site Configuration' => Egw::link('/index.php','menuaction=admin.admin_config.index&appname=archive'),
			);
			if ($location == 'admin')
			{
				display_section('archive',$file);
			}
			else
			{
				display_sidebox('archive',lang('Archive'),$file);
			}
		}
	}
}