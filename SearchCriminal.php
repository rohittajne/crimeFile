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
   <a href="CriminalRegistration.php"><h2>Back</h2></a>
  <tr>
    <td>
 <table width="766" height="113" border="1" align="center">
  <tr>
    <td width="591" colspan="2" align="center">Search Criminal</td>
  </tr>
  <tr>
    <td colspan="2" align="center"> Enter
    Name of Criminal :-
      <input name="name" type="text" required="required" id="textfield">
      <input type="submit" name="submit" id="submit" value="Search"></td>
  </tr>
</table>
<?php
if(isset($_POST['submit'])){
$cname=$_POST['name'];
$m=new MongoClient();
$query = $m->crime->criminal->find(array('name'=> $cname));
foreach ( $query as $current )
{
?>
<table width="369" height="422" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><h2>Criminal Record</h2></td>
  </tr>
  <tr>
    <td><p>Name :-</p></td>
    <td><?php echo $current["name"]; ?></td>
  </tr>
  <tr>
    <td>Nick Name:-</td>
    <td><?php echo $current["nickname"]; ?></td>
  </tr>
  <tr>
    <td>Age :-</td>
    <td><?php echo $current["age"]; ?></td>
  </tr>
  <tr>
    <td>Occupation :-</td>
    <td><?php echo $current["occ"]; ?></td>
  </tr>
  <tr>
    <td>Crime Type:- </td>
    <td><?php echo $current["type"]; ?></td>
  </tr>
  <tr>
    <td>Address :-</td>
    <td><?php echo $current["address"]; ?></td>
  </tr> 
</table>

<?php } } ?>

</td></tr></table>
</form>
</body>
</html>
