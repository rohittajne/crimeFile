<?php 
$fir=$_GET['firno'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>
<?php
	$m=new MongoClient();

$query = $m->crime->fir->find(array('firno'=> $fir));

foreach ( $query as $current )
	{
?>
<table>
<tr align="center">

<table width="960" height="431" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
  <tr>
    <td>
 <table width="408" height="436" border="1" align="center">
  <tr>
    <td colspan="2" align="center">FIR</td>
  </tr>
  <tr>
    <td width="185">FIR No.:-</td>
    <td width="207"><?php echo $current["firno"]; ?></td>
  </tr>
  <tr>
    <td>Complaint No:-</td>
    <td><?php echo $current["compno"];  ?></td>
  </tr>
  <tr>
    <td>Date:-</td>
    <td><?php echo $current["date"];  ?></td>
  </tr>
  <tr>
    <td>Time:- </td>
    <td><?php  echo $current["time"]; ?></td>
  </tr>
  <tr>
    <td>Type of Crime:-</td>
    <td><?php  echo $current["type"]; ?></td>
  </tr>
  <tr>
    <td>Crime Description:-</td>
    <td><?php  echo $current["desc"]; ?></td>
  </tr>
  <tr>
    <td>Place :-</td>
    <td><?php echo $current["place"];  ?></td>
  </tr>
  <tr>
    <td>Informant Address:- </td>
    <td><?php  echo $current["infadd"]; ?></td>
  </tr>
  <tr>
    <td>Name of Police :-</td>
    <td><?php echo $current["police"];  ?></td>
  </tr>
  <tr>
    <td>Received Time:-</td>
    <td><?php echo $current["rtime"];  ?></td>
  </tr>
  <tr>
    <td>Imformation received :-</td>
    <td><?php  echo $current["info"]; ?></td>
  </tr>
 
</table>
</td></tr></table>

<?php } ?>
</body>
</html>
