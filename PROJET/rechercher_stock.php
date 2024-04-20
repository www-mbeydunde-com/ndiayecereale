<?php require_once('Connections/connex.php'); ?>
<?php
$colname_Recordset1 = "-1";
if (isset($_POST['nom'])) {
  $colname_Recordset1 = (get_magic_quotes_gpc()) ? $_POST['nom'] : addslashes($_POST['nom']);
}
mysql_select_db($database_connex, $connex);
$query_Recordset1 = sprintf("SELECT * FROM stocks WHERE nom = '%s'", $colname_Recordset1);
$Recordset1 = mysql_query($query_Recordset1, $connex) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
<style type="text/css">
<!--
body {
	background-image: url(wheat-865152_1280.jpg);
}
.Style1 {
	font-size: 36px;
	color: #FF9900;
}
.Style2 {color: #FF9900}
.Style3 {color: #FF6600}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <span class="Style1">NOM</span>
  <label>
  <input name="nom" type="text" id="nom" />
  </label>
  <label>
  <input type="submit" name="Submit" value="Rechercher" />
  </label>
  <p>&nbsp;</p>
</form>

<table border="1" align="left">
  <tr>
    <td><span class="Style3">ID_Produit</span></td>
    <td><span class="Style2">nom</span></td>
    <td><span class="Style2">poids</span></td>
    <td><span class="Style2">type</span></td>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="table_stock.php"><strong>RETOUR</strong></a></p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
