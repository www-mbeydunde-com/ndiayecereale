<?php require_once('Connections/connex.php'); ?>
<?php
mysql_select_db($database_connex, $connex);
$query_Recordset1 = "SELECT * FROM ventes";
$Recordset1 = mysql_query($query_Recordset1, $connex) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Page d'accueil</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS---------------
var d=new Date();
monthname= new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//--------------- END LOCALIZEABLE   ---------------
</script>
<style type="text/css">
<!--
body {
	background-image: url(wheat-865152_1280.jpg);
}
.Style1 {
	font-size: 36px;
	color: #00CC00;
}
.Style3 {color: #333333}
.Style4 {color: #000000}
.Style5 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style></head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="mais-tige-pret-etre-recolte-dans-champ_1150-21861.jpg" width="303" height="139" /></td>
    <td height="84" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap"><p>&quot;Mbey Dunde&quot; </p>
      <p><span class="Style1">LISTES VENTES</span></p></td>
    <td width="388">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="80" colspan="3" id="tagline" valign="top" align="center">&nbsp;</td>
	<td width="388">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7" id="dateformat" height="20">&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

 <tr>
    <td width="4" height="255" valign="top" bgcolor="#5C743D"><br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="211"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />
    <table border="1">
      <tr>
        <td>ID_vente<span class="Style3">s</span></td>
        <td><span class="Style4">ID_produit</span></td>
        <td><span class="Style4">quantite</span></td>
        <td><span class="Style4">prix</span></td>
        <td><span class="Style4">ID_client</span></td>
      </tr>
      <?php do { ?>
        <tr>
          <td><?php echo $row_Recordset1['ID_ventes']; ?></td>
          <td><?php echo $row_Recordset1['ID_produit']; ?></td>
          <td><?php echo $row_Recordset1['quantite']; ?></td>
          <td><?php echo $row_Recordset1['prix']; ?></td>
          <td><?php echo $row_Recordset1['ID_client']; ?></td>
        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </table>
    <br />
	&nbsp;<br />	</td>
    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="171" valign="top"><p><br />
		&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><a href="table_vente.php" class="Style5">RETOUR</a><br />
                      </p></td>
	<td width="388">&nbsp;</td>
  </tr>
  <tr>
    <td width="4">&nbsp;</td>
    <td width="211">&nbsp;</td>
    <td width="167">&nbsp;</td>
    <td width="138">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="171">&nbsp;</td>
	<td width="388">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
