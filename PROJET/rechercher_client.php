<?php require_once('Connections/connex.php'); ?>
<?php
$colname_Recordset1 = "-1";
if (isset($_POST['prenom'])) {
  $colname_Recordset1 = (get_magic_quotes_gpc()) ? $_POST['prenom'] : addslashes($_POST['prenom']);
}
mysql_select_db($database_connex, $connex);
$query_Recordset1 = sprintf("SELECT * FROM client WHERE prenom = '%s'", $colname_Recordset1);
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
.Style4 {color: #FF9900}
.Style5 {
	color: #FF6600;
	font-weight: bold;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <label> <span class="Style1">PRENOM</span>
  <input name="prenom" type="text" id="prenom" />
  <input type="submit" name="Submit" value="RECHERCHER" />
  </label>
  <label></label>
  <p>&nbsp; </p>
</form>



<table border="1">
  <tr>
    <td><span class="Style4">ID_Client</span></td>
    <td><span class="Style4">prenom</span></td>
    <td><span class="Style4">nom</span></td>
    <td><span class="Style4">adresse</span></td>
    <td><span class="Style4">contact</span></td>
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
<p class="Style5"><a href="table_client.php">RETOUR</a></p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>