<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>
<form name="comp" method="post">
<table width="960" height="431" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
   <a href="Complaint.php"><h2>Back</h2></a>
  <tr>
    <td>
 <table width="700" height="162" border="0" align="center">
  <tr>
    <td height="44" align="center"><h2>Search Complaint Status</h2></td>
  </tr>
  <tr>
    <td height="28" align="center"> Enter
      Complaint No:-
    <select name="compno" required="required" id="select">
 
    <?php
$m=new MongoClient();
$query = $m->crime->complaint->find();
foreach ( $query as $current )
{	
?>
    <option><?php echo $current["compno"]; ?></option>
 <?php } ?>
    </select>
    <input type="submit" name="submit" id="submit" value="Search"></td>
    
<?php
if(isset($_POST['submit'])){
$compno=$_POST['compno'];
$m=new MongoClient();
$query = $m->crime->complaint->find(array('compno'=>$compno));
foreach ( $query as $doc )
{
?>
  </tr>
  </table>

<table width="369" height="422" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><h2>Complaint Registration</h2></td>
  </tr>
  <tr>
    <td width="133"><p>Name :-</p></td>
    <td width="226"><?php echo $doc["name"]; ?></td>
  </tr>
  <tr>
    <td>Nick Name:-</td>
    <td><?php echo $doc["nickname"]; ?></td>
  </tr>
  <tr>
    <td>Age :-</td>
    <td><?php echo $doc["age"]; ?></td>
  </tr>
  <tr>
    <td>Occupation :-</td>
    <td><?php echo $doc["occ"]; ?></td>
  </tr>
  <tr>
    <td>Crime Type:- </td>
    <td><?php echo $doc["type"]; ?></td>
  </tr>
  <tr>
    <td>Address :-</td>
    <td><?php echo $doc["address"]; ?></td>
  </tr>
</table>

<?php } 
}
?>



  
</td></tr></table>
</form>
</body>
</html>
