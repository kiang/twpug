<?php


print '<script language="javascript">
function init() {if (TransMenu.isSupported()) {TransMenu.initialize();MenuItem0.onactivate = function() { document.getElementById("LinkMenuItem0").className = "hover"; };
MenuItem0.ondeactivate = function() { document.getElementById("LinkMenuItem0").className = ""; };
document.getElementById("LinkMenuItem1").onmouseover = function() { ms.hideCurrent();this.className = "hover";};
document.getElementById("LinkMenuItem1").onmouseout =   function() { this.className = ""; };}}
</script><table width="100%" align="center" class="tabform2"><TR>
<td align=left width=10% >&nbsp;&nbsp;<a id="LinkMenuItem0" href="index.php" class="link-menu"><input type="button" onclick=\'javascript:location.href="index.php";\' value ="Vtiger Lang Pack" border="0" class="btnmenu" /></A>&nbsp;&nbsp;</td>
<td align=right >&nbsp;&nbsp;<a id="LinkMenuItem1" href="'.(basename($_SERVER["PHP_SELF"])).'" class="link-menu" ><input type="button" onclick=\'javascript:location.href="'.(basename($_SERVER["PHP_SELF"])).'";\' value ="Refresh" border="0" class="btnmenu" /></A>&nbsp;&nbsp;</td></TR></TABLE><script language="javascript">
if (TransMenu.isSupported()) {var ms = new TransMenuSet(TransMenu.direction.down, 0, 0, TransMenu.reference.bottomLeft);var MenuItem0 = ms.addMenu(document.getElementById("LinkMenuItem0"));
MenuItem0.addItem("Language Pack Manager","lang_mngt.php");
MenuItem0.addItem("Edit Manifest","mnf_adm.php");
MenuItem0.addItem("Translation Management","exp_pack.php");
MenuItem0.addItem("To Translate","totrx.php");
MenuItem0.addItem("Dictionary Administration","dico_adm.php");
var MenuItem1 = ms.addMenu(document.getElementById("LinkMenuItem1"));
TransMenu.renderAll();}
</script>';
?>