/**
 * EGroupware - Benno Mail Archive
 *
 * @link http://www.egroupware.org
 * @author Ralf Becker <rb@egroupware.org>
 * @package archive
 * @copyright (c) 2014-23 by Ralf Becker <rb@egroupware.org>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 */

const interval = window.setInterval(() =>
{
	if (typeof window.jQuery !== 'undefined')
	{
		window.clearInterval(interval);

		jQuery(() =>
		{
			var action = jQuery('#archive_login_js').attr('data-url');
			var form = jQuery(document.createElement('form'))
				.attr({method: 'POST', action: action})
				.appendTo(jQuery('body'));
			var attrs = JSON.parse(jQuery('#archive_login_js').attr('data-attrs'));
			for(var attr in attrs)
			{
				jQuery(document.createElement('input'))
					.attr({type: 'hidden', name: attr, value: attrs[attr]})
					.appendTo(form);
			}
			form[0].submit();
		});
	}
}, 200);