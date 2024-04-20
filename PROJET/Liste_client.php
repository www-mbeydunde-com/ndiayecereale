<?php require_once('Connections/connex.php'); ?>
<?php
mysql_select_db($database_connex, $connex);
$query_Recordset1 = "SELECT * FROM client";
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
	color: #33CC66;
}
.Style2 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style></head>
<body bgcolor="#F4FFE4">


<div align="justify">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#D5EDB3">
      <td colspan="3" rowspan="2"><img src="mais-tige-pret-etre-recolte-dans-champ_1150-21861.jpg" width="304" height="149" /></td>
      <td height="52" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap"><p>&quot;Mbey Dunde&quot; </p>
        <p><span class="Style1">LISTES CLIENTS</span></p></td>
      <td width="302">&nbsp;</td>
    </tr>
      
    <tr bgcolor="#D5EDB3">
      <td height="86" colspan="3" id="tagline" valign="top" align="center">&nbsp;</td>
      <td width="302">&nbsp;</td>
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
      <td width="4" height="171" valign="top" bgcolor="#5C743D"><br />
        &nbsp;<br />
      &nbsp;<br /> 	</td>
      <td width="213"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
      <td colspan="2" valign="top"><img src="mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
        &nbsp;<br />
        &nbsp;<br />
        <br />
        &nbsp;
        <table border="1">
          <tr>
            <td>ID_Client</td>
            <td>prenom</td>
            <td>nom</td>
            <td>adresse</td>
            <td>contact</td>
          </tr>
          <?php do { ?>
            <tr>
              <td><?php echo $row_Recordset1['ID_Client']; ?></td>
              <td><?php echo $row_Recordset1['prenom']; ?></td>
              <td><?php echo $row_Recordset1['nom']; ?></td>
              <td><?php echo $row_Recordset1['adresse']; ?></td>
              <td><?php echo $row_Recordset1['contact']; ?></td>
            </tr>
            <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        </table>
      <br />	</td>
      <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
          <td width="251" valign="top"><p><br />
          &nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><br />
            </p>
          <p class="Style2"><a href="table_client.php">RETOUR</a>                </p></td>
      <td width="302">&nbsp;</td>
    </tr>
    <tr>
      <td width="4">&nbsp;</td>
      <td width="213">&nbsp;</td>
      <td width="169">&nbsp;</td>
      <td width="140">&nbsp;</td>
      <td width="50">&nbsp;</td>
      <td width="251">&nbsp;</td>
      <td width="302">&nbsp;</td>
    </tr>
  </table>
     <div align="center"></div>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
