<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>
<table width="960" height="431" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
  <tr>
    <td>
 <table width="423" height="247" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><h2>Add Complaint Status</h2></td>
  </tr>
  <tr>
    <td>Select Complaint No. :-</td>
    <td><select name="select" required id="select">
    </select></td>
  </tr>
  <tr>
    <td>Status :-</td>
    <td><textarea name="status" required id="textarea"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Add Status"></td>
    
    
       <?php
  if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$add=$_POST["address"];
$con=$_POST["mobile"];
$pass=$_POST["password"];

$m=new MongoClient();
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

    
    
  </tr>
</table>
</td></tr></table>
</body>
</html>
