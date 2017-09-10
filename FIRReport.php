<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>
<form name="fr" method="post">
<table width="960" height="431" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
   <a href="FIR.php"><h2>Back</h2></a>
  <tr>
    <td>
 <table width="392" height="166" border="0" align="center">
  <tr>
    <td colspan="2" align="center">FIR Report</td>
  </tr>
  <tr>
    <td width="184" height="32" align="right">Select FIR No.:-</td>
    <td width="192"><select name="fir" required id="select">
 
    <?php
	$m=new MongoClient();
$query = $m->crime->fir->find();
foreach ( $query as $current )
	{
?>
    <option><?php echo $current["firno"]; ?></option>
 <?php } ?>
    </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Show Report"></td>
    
<?php    
if(isset($_POST["submit"])){
	
	$fir=$_POST["fir"];
	?>
    <script type="text/javascript">
		window.location="ShowFIRReport.php?firno=<?php echo $fir;?>"
	</script> 
<?php
}
?>
    
    
  </tr>
</table>
</td></tr></table>
</form>
</body>
</html>
