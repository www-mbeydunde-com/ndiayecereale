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

if ((isset($_POST['ID_Client'])) && ($_POST['ID_Client'] != "")) {
  $deleteSQL = sprintf("DELETE FROM client WHERE ID_Client=%s",
                       GetSQLValueString($_POST['ID_Client'], "int"));

  mysql_select_db($database_connex, $connex);
  $Result1 = mysql_query($deleteSQL, $connex) or die(mysql_error());

  $deleteGoTo = "Sup_client.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

mysql_select_db($database_connex, $connex);
$query_Recordset1 = "SELECT * FROM client";
$Recordset1 = mysql_query($query_Recordset1, $connex) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<style type="text/css">
<!--
body {
	background-image: url(wheat-865152_1280.jpg);
}
-->
</style></head>

<body>
<?php do { ?>
  <form id="form1" name="form1" method="post" action="">
    <label>
    <input name="ID_Client" type="text" id="ID_Client" value="<?php echo $row_Recordset1['ID_Client']; ?>" />
    </label>
    <label>
    <input name="textfield2" type="text" value="<?php echo $row_Recordset1['prenom']; ?>" />
    </label>
    <label>
    <input name="textfield3" type="text" value="<?php echo $row_Recordset1['nom']; ?>" />
    </label>
    <label>
    <input name="textfield4" type="text" value="<?php echo $row_Recordset1['adresse']; ?>" />
    </label>
    <label>
    <input name="textfield5" type="text" value="<?php echo $row_Recordset1['contact']; ?>" />
    </label>
    <label>
    <input type="submit" name="Submit" value="SUPPRIMER" />
    </label>
  </form>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  <p>&nbsp;</p>
  <p><strong><a href="table_client.php">RETOUR</a></strong></p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
