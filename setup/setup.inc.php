<?php
/**
 * EGroupware - Benno Mail Archive
 *
 * @link http://www.egroupware.org
 * @author Ralf Becker <rb@egroupware.org>
 * @package archive
 * @copyright (c) 2013-15 by Ralf Becker <rb@egroupware.org>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id$
 */

$setup_info['archive']['name']      = 'archive';
$setup_info['archive']['version']   = '0.2';
$setup_info['archive']['app_order'] = 5;
$setup_info['archive']['tables']    = array();
$setup_info['archive']['enable']    = 1;

$setup_info['archive']['author'] =
$setup_info['archive']['maintainer'] = array(
	'name'  => 'Ralf Becker',
	'email' => 'rb@egroupware.org'
);
$setup_info['archive']['license']  = 'GPL';
$setup_info['archive']['hooks']['csp-frame-src'] = 'archive_hooks::csp_frame_src';
$setup_info['archive']['hooks']['config'] = 'archive_hooks::config';

// either use regular egroupware configuration (comment out to disable)
$setup_info['archive']['hooks']['admin'] = 'archive_hooks::all_hooks';

// or configure your archive url & auth here instead following defaults:
$setup_info['archive']['url'] = '/benno/index.php?CA=greeting#';
$setup_info['archive']['auth'] = 'username';
