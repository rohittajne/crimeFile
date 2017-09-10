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
  <tr>
  <a href="UserHome.php"><h2>HOME</h2></a>
    <td>
 <table width="369" height="422" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><h2>Complaint Registration</h2></td>
  </tr>
  <tr>
    <td width="133"><p>Name :-</p></td>
    <td width="226"><input type="text" name="name" id="textfield"></td>
  </tr>
  <tr>
    <td>Nick Name:-</td>
    <td><input type="text" name="nickname" id="textfield2"></td>
  </tr>
  <tr>
    <td>Age :-</td>
    <td><input type="text" name="age" id="textfield3"></td>
  </tr>
  <tr>
    <td>Occupation :-</td>
    <td><input type="text" name="occupation" id="textfield4"></td>
  </tr>
  <tr>
    <td>Crime Type:- </td>
    <td><input type="text" name="type" id="textfield5"></td>
  </tr>
  <tr>
    <td>Address :-</td>
    <td><textarea name="address" id="textarea"></textarea></td>
  </tr>
  
  <tr>
    <td height="67" colspan="2" align="center"><p>
      <input type="submit" name="submit" id="submit" value="Save">
    </p>
      <p><a href="ShowComplaints.php">Show Complaints</a></p></td>
    
       <?php
  if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$add=$_POST["address"];
$nickname=$_POST["nickname"];
$age=$_POST["age"];
$occ=$_POST["occupation"];
$type=$_POST["type"];
$compno=date(d).time();
$m=new MongoClient();
$db=$m->crime;
$collection = $db->complaint;

$document = array( 
"compno"=>"$compno",
"name" => "$name",
"address" => "$add", 
"nickname" => "$nickname", 
"age" => "$age", 
"occ" => "$occ", 
"type" => "$type",
);

$collection->insert($document);
echo "Record Added...";
}
?>
   
    
  </tr>
</table>
</td></tr></table>
</form>
</body>
</html>
