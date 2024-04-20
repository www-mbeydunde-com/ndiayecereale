<?php require_once('Connections/connex.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO ventes (ID_ventes, ID_produit, quantite, prix, ID_client) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['ID_ventes'], "int"),
                       GetSQLValueString($_POST['ID_produit'], "int"),
                       GetSQLValueString($_POST['quantite'], "int"),
                       GetSQLValueString($_POST['prix'], "int"),
                       GetSQLValueString($_POST['ID_client'], "int"));

  mysql_select_db($database_connex, $connex);
  $Result1 = mysql_query($insertSQL, $connex) or die(mysql_error());
}

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
monthname= new Array("Janvier","F�vrier","Mars","Avril","Mai","Juin","Juillet","Ao�t","Septembre","Octobre","Novembre","D�cembre");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//--------------- END LOCALIZEABLE   ---------------
</script>
<style type="text/css">
<!--
body {
	background-image: url(wheat-865152_1280.jpg);
}
.Style2 {
	font-size: 36px;
	color: #FF9900;
}
.Style3 {
	font-size: 16px;
	color: #000000;
}
.Style4 {
	font-size: 16px;
	color: #FF9900;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="71%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="mais-tige-pret-etre-recolte-dans-champ_1150-21861.jpg" width="296" height="131" /></td>
    <td height="130" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap"><p>&nbsp;</p>
      <p>&quot;Mbey Dunde&quot;</p>
    <p align="center" class="Style2">INSERTION VENTES </p></td>
    <td width="4">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="19" colspan="3" id="tagline" valign="top" align="center">&nbsp;</td>
	<td width="4">&nbsp;</td>
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
    <td width="165" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">
        <tr>
          <td width="165">&nbsp; <div align="justify"><br />
              <span class="Style4">&nbsp;<strong>MENU</strong></span><br />
          </div></td>
        </tr>
        <tr>
          <td width="165"><a href="index.php" class="navText">Accueil</a></td>
        </tr>
        <tr>
          <td width="165"><a href="table_vente.php">Table vente </a></td>
        </tr>
        <tr>
          <td width="165"><a href="mise_a_jour_vente.php">Modifier</a></td>
        </tr>
        <tr>
          <td width="165">&nbsp;</td>
        </tr>
        <tr>
          <td width="165"><a href="javascript:;" class="navText"></a></td>
        </tr>
      </table>
 	�<br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />	�<br />
&nbsp;
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">ID_ventes:</td>
      <td><input type="text" name="ID_ventes" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">ID_produit:</td>
      <td><input type="text" name="ID_produit" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Quantite:</td>
      <td><input type="text" name="quantite" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Prix:</td>
      <td><input type="text" name="prix" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">ID_client:</td>
      <td><input type="text" name="ID_client" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Ins�rer l'enregistrement"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p><a href="rechercher_vente.php">RECHERHER</a></p>
<p><a href="Sup_vente.php">SUPPRIMER</a></p>
<br />	</td>
    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="561" valign="top"><br />
&nbsp;
<form id="form2" name="form2" method="post" action="">
  <div align="center" class="Style3">LISTES VENTES  </div>
</form>
<table border="1">
  <tr>
    <td>ID_ventes</td>
    <td>ID_produit</td>
    <td>quantite</td>
    <td>prix</td>
    <td>ID_client</td>
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
<br /></td>
        <td width="4">&nbsp;</td>
  </tr>
  <tr>
    <td width="165">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="83">&nbsp;</td>
    <td width="222">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="561">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>

