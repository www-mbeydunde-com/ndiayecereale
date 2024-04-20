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
  $insertSQL = sprintf("INSERT INTO stocks (ID_Produit, nom, poids, type) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['ID_Produit'], "int"),
                       GetSQLValueString($_POST['nom'], "text"),
                       GetSQLValueString($_POST['poids'], "int"),
                       GetSQLValueString($_POST['type'], "text"));

  mysql_select_db($database_connex, $connex);
  $Result1 = mysql_query($insertSQL, $connex) or die(mysql_error());
}

mysql_select_db($database_connex, $connex);
$query_Recordset1 = "SELECT * FROM stocks";
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
.Style1 {
	font-size: 36px;
	color: #FF9900;
}
body {
	background-image: url(wheat-865152_1280.jpg);
}
.Style2 {
	font-size: 16px;
	color: #000000;
}
.Style3 {
	color: #FF9900;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="mais-tige-pret-etre-recolte-dans-champ_1150-21861.jpg" width="425" height="229" /></td>
    <td height="120" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap"><p>&quot;Mbey Dunde&quot; </p>
    <p><span class="Style1">insertion stocks </span></p></td>
    <td width="170">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="97" colspan="3" id="tagline" valign="top" align="center">&nbsp;</td>
	<td width="170">&nbsp;</td>
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
          <td width="165">&nbsp;
            <div align="justify"><br />
              <span class="Style3">&nbsp;MENU</span><br />
            </div></td>
        </tr>
        <tr>
          <td width="165"><a href="index.php" class="navText">Accueil</a></td>
        </tr>
        <tr>
          <td width="165"><a href="table_stock.php">Table stock </a></td>
        </tr>
        <tr>
          <td width="165"><a href="mise_a_jour_stock.php" class="navText">Modifier</a></td>
        </tr>
        <tr>
          <td width="165">&nbsp;</td>
        </tr>
        <tr>
          <td width="165"><a href="javascript:;" class="navText"></a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />	 <br />
&nbsp;
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">ID_Produit:</td>
      <td><input type="text" name="ID_Produit" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nom:</td>
      <td><input type="text" name="nom" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Poids:</td>
      <td><input type="text" name="poids" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Type:</td>
      <td><input type="text" name="type" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insérer l'enregistrement"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p><a href="rechercher_stock.php">RECHERCHER </a></p>
<p><a href="Sup_stock.php">SUPPRIMER</a></p>
<br />	</td>
    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="389" valign="top"><br />
&nbsp;
<form id="form2" name="form2" method="post" action="">
  <div align="center" class="Style2">
    <p align="justify">LISTES STOCKS</p>
    </div>
</form>
<table border="1">
  <tr>
    <td>ID_Produit</td>
    <td>nom</td>
    <td>poids</td>
    <td>type</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['ID_Produit']; ?></td>
      <td><?php echo $row_Recordset1['nom']; ?></td>
      <td><?php echo $row_Recordset1['poids']; ?></td>
      <td><?php echo $row_Recordset1['type']; ?></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
<br /></td>
        <td width="170">&nbsp;</td>
  </tr>
  <tr>
    <td width="165">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="167">&nbsp;</td>
    <td width="138">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="389">&nbsp;</td>
	<td width="170">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
