<?php
/**
 * EGroupware - Benno Mail Archive
 *
 * @link http://www.egroupware.org
 * @author Ralf Becker <rb@stylite.de>
 * @package archive
 * @copyright (c) 2013-15 by Ralf Becker <rb@stylite.de>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id: setup.inc.php 3932 2015-07-24 09:09:07Z ralfbecker $
 */

// give Admins group rights for archive
$admingroup = $GLOBALS['egw_setup']->add_account('Admins', 'Admin', 'Group', False, False);
$GLOBALS['egw_setup']->add_acl('archive', 'run', $admingroup);

// give Default group rights for archive
$defaultgroup = $GLOBALS['egw_setup']->add_account('Default', 'Default', 'Group', False, False);
$GLOBALS['egw_setup']->add_acl('archive', 'run', $defaultgroup);
