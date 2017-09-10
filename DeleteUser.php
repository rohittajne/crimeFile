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
 <table width="314" height="189" border="1" align="center">
  <tr>
    <td colspan="2" align="center">Delete User</td>
  </tr>
  <tr>
    <td>User name :- </td>
    <td><input name="user" type="text" required="required" id="textfield"></td>
    
  
    
               
<?php 
if(isset($_POST['submit'])){
$user=$_POST['user'];
	  
$m=new MongoClient();
try{
$db=$m->pim;
$collection = $db->reg;

$arr=array( 'name'=>$user);

$r=$collection->remove($arr);
var_dump($r);
echo "<br /><br />Record Deleted...";
$m->close();
}

catch(MongoException $m)
{
echo $m;
exit;
}
}

?>
    
    
    
    
    
    
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Delete">
    <input type="submit" name="submit2" id="submit2" value="Cancel"></td>
  </tr>
</table>
</td></tr></table>
</body>
</html>
