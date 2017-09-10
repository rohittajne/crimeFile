<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>
<form name="f1" method="post">

<table width="960" height="431" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
   <a href="UserHome.php"><h2>HOME</h2></a>
  <tr>
    <td>
 <table width="330" height="282" border="0" align="center">
  <tr>
    <td height="42" colspan="2" align="center"><h2>Add New User</h2></td>
  </tr>
  <tr>
    <td width="122">Name</td>
    <td width="192"><input name="name" type="text" required id="textfield"></td>
  </tr>
  <tr>
    <td>Password :-</td>
    <td><input name="password" type="password" required id="textfield2"></td>
  </tr>
  <tr>
    <td>Mobile :-</td>
    <td><input name="mobile" type="text" required id="textfield3"></td>
  </tr>
  <tr>
    <td>Address :-</td>
    <td><textarea name="address" required id="textarea"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Add">
    
  </tr>
   <?php
  if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$add=$_POST["address"];
$con=$_POST["mobile"];
$pass=$_POST["password"];

$m=new mongoClient();
$db=$m->crime;
$collection = $db->register;

$document = array( 
"name" => "$name",
"mobile" => "$con",
"address" => "$add", 
"password" => "$pass"
);

$collection->insert($document);
echo "Record Added...";
}

?>
</table>
</td></tr></table>


</body>
</html>
