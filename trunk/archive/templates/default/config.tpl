<!-- BEGIN header -->
<p style="text-align: center; color: {th_err};">{error}</p>
<form name=frm method="POST" action="{action_url}">
{hidden_vars}
<table border="0" align="left">
   <tr class="th">
    <td colspan="2">&nbsp;<b>{title}</b></td>
   </tr>
<!-- END header -->

<!-- BEGIN body -->
<tr class="row_on">
	<td width="450">{lang_Archive_URL_(either_full_URL_or_path,_if_on_same_host)}:</td>
	<td><input name="newsettings[archive_url]" value="{value_archive_url}" size="40"></td>
</tr>
<tr class="row_off">
	<td>{lang_Authentication_uses}:</td>
	<td>
		<select name="newsettings[archive_auth]">
			<option value="username"{selected_archive_auth_username}>{lang_Username}</option>
			<option value="email"{selected_archive_auth_email}>{lang_EMail_address}</option>
		</select>
	</td>
</tr>
<!-- END body -->

<!-- BEGIN footer -->
  <tr class="th">
    <td colspan="2">
&nbsp;
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="submit" value="{lang_submit}">
      <input type="submit" name="cancel" value="{lang_cancel}">
    </td>
  </tr>
</table>
</form>
<!-- END footer -->
