<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
<style type="text/css">
a:link {
	color: #FFF;
}
a:visited {
	color: #FFF;
}
a:hover {
	color: #FFF;
}
a:active {
	color: #FFF;
}
</style>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>
<form name="f1" method="post">
<table width="960" height="431" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
  
  <tr>
    <td>
    <table width="376" height="312" border="1" align="center">
    <tr><td align="center">
    <table width="302" height="248" border="0" align="center">
  <tr>
    <td height="67" colspan="2" align="center"><h2>Login</h2></td>
  </tr>
  <tr>
    <td width="111" height="57">User Name :-</td>
    <td width="152"><input name="username" type="text" required="required" id="textfield"></td>
  </tr>
  <tr>
    <td height="58">Password :-</td>
    <td><input name="password" type="password" required="required" id="password"></td>
  </tr>
  <tr>
    <td height="54" colspan="2" align="center"><p>
      <input type="submit" name="submit" id="submit" value="Submit">
    </p></td>

  </tr>
</table>

<?php 


$m=new mongoClient();
$db=$m->crime;
$collection = $db->register;

if(isset($_POST["submit"])){

$uname=$_POST['username'];
$pass=$_POST['password'];


if($uname=="Admin" && $pass=="@dmin")
{	?>
<script type="text/javascript">
	window.location="admin.php"
</script>
<?php
}
	$query = $collection->find(array('name'=> $uname));
	foreach($query as $doc)
	{	
	if($uname==$doc['name'] && $pass==$doc['password'])
	{			
		?>
			<script type="text/javascript">
			window.location="UserHome.php?name=<?php echo $uname;?>"
			</script> 
<?php
	}
	}
}
?>
</td></tr></table>
</td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
