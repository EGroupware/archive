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

// give Admins group rights for archive
$admingroup = $GLOBALS['egw_setup']->add_account('Admins', 'Admin', 'Group', False, False);
$GLOBALS['egw_setup']->add_acl('archive', 'run', $admingroup);

// give Default group rights for archive
$defaultgroup = $GLOBALS['egw_setup']->add_account('Default', 'Default', 'Group', False, False);
$GLOBALS['egw_setup']->add_acl('archive', 'run', $defaultgroup);
