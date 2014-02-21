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

$setup_info['archive']['name']      = 'archive';
$setup_info['archive']['version']   = '0.1';
$setup_info['archive']['app_order'] = 5;
$setup_info['archive']['tables']    = array();
$setup_info['archive']['enable']    = 1;

$setup_info['archive']['author'] =
$setup_info['archive']['maintainer'] = array(
	'name'  => 'Ralf Becker',
	'email' => 'rb@stylite.de'
);
$setup_info['archive']['license']  = 'GPL';
$setup_info['archive']['hooks']['csp-frame-src'] = 'archive_hooks::csp_frame_src';

// configure your archive url here:
$setup_info['archive']['url'] = 'https://benno-web.stylite.de/benno/index.php?CA=greeting#';
