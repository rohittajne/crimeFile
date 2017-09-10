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
   <a href="Postmortem.php"><h2>Back</h2></a>
  <tr>
    <td>
 <table width="336" height="209" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><h2>Post Mortem Report</h2></td>
  </tr>
  <tr>
    <td width="190">Select Mortem No. :-</td>
    <td width="130"><select name="pmno" required id="select">
    <?php
	$m=new MongoClient();
$query = $m->crime->postmortem->find();
foreach ( $query as $current )
	{
?>
    <option><?php echo $current["pmno"]; ?></option>
 <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td height="65" colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Show Report"></td>
    
    
    
    
    
<?php    
if(isset($_POST["submit"])){
	
	$pmno=$_POST["pmno"];
	?>
    <script type="text/javascript">
		window.location="ShowPMReport.php?pmno=<?php echo $pmno;?>"
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
