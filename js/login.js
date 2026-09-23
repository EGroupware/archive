/**
 * EGroupware - Benno Mail Archive
 *
 * @link http://www.egroupware.org
 * @author Ralf Becker <rb@egroupware.org>
 * @package archive
 * @copyright (c) 2014-23 by Ralf Becker <rb@egroupware.org>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 */

const ready = () =>
{
	const trigger = document.getElementById('archive_login_js');
	const form = document.createElement('form');
	form.method = 'POST';
	form.action = trigger.getAttribute('data-url');
	document.body.appendChild(form);

	const attrs = JSON.parse(trigger.getAttribute('data-attrs'));
	for (const attr in attrs)
	{
		const input = document.createElement('input');
		input.type = 'hidden';
		input.name = attr;
		input.value = attrs[attr];
		form.appendChild(input);
	}
	form.submit();
};

if (document.readyState !== 'loading') ready();
else document.addEventListener('DOMContentLoaded', ready);