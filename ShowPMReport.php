


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>

<?php
$pmno=$_GET['pmno'];
	$m=new MongoClient();

$query = $m->crime->postmortem->find(array('pmno'=> $pmno));

foreach ( $query as $current )
	{

?>

<table width="960" height="431" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
   <a href="Postmortem.php"><h2>Back</h2></a>
  <tr>
    <td>
 <table width="470" height="479" border="1" align="center">
  <tr>
    <td colspan="2" align="center">PostMortem Report</td>
  </tr>
  <tr>
    <td width="179">Mortem No:-</td>
    <td width="275"><?php echo $current["pmno"]; ?></td>
  </tr>
  <tr>
    <td>FIR No.:-</td>
    <td><?php echo $current["firno"]; ?></td>
  </tr>
  <tr>
    <td>Result :-</td>
    <td><?php echo $current["result"]; ?></td>
  </tr>
  <tr>
    <td>Gender:-</td>
    <td><?php echo $current["gender"]; ?></td>
  </tr>
  <tr>
    <td>Date of Death :-</td>
    <td><?php echo $current["dob"]; ?></td>
  </tr>
  <tr>
    <td>Description of Case :-</td>
    <td><?php echo $current["desc"]; ?></td>
  </tr>
  <tr>
    <td>Address :-</td>
    <td><?php echo $current["address"]; ?></td>
  </tr>
  <tr>
    <td>Doctors Name :-</td>
    <td><?php echo $current["doctor"]; ?></td>
  </tr>
  <tr>
    <td>Police Station :-</td>
    <td><?php echo $current["pstation"]; ?></td>
  </tr>

</table>
</td></tr></table>

<?php } ?>
</body>
</html>
