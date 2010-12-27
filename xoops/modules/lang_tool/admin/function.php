<?
function the_form($data=NULL){
?>
<form method="post">
<input type="hidden" name="lang" value="1">
<table align="center" cellpadding="1" cellspacing="1" width="400" border="1">
 <tr>
  <td width="100"><?=_MD_LANG_TOOL_LANGTITLE;?></td>
  <td width="300">
   <input type="text" name="lang_title" value="<?=$data['lang_title'];?>" size="40">
  </td>
 </tr>
 <tr>
  <td width="100"><?=_MD_LANG_TOOL_FOLDER;?></td>
  <td width="300">
   <input type="text" name="dirname" value="<?=$data['dirname'];?>" size="40">
  </td>
 </tr>
 <tr>
  <td colspan="4" align="center">
   <input type="submit">
   <input type="reset">
  </td>
 </tr>
</table>
</form>
<?
}
?>