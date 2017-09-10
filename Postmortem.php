<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>
<form name="form" method="post">
<table width="960" height="431" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
   <a href="UserHome.php"><h2>HOME</h2></a>
  <tr>
    <td>
 <table width="395" height="470" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><p><h2>Postmortem</h2></p></td>
  </tr>
  <tr>
    <td width="162">Postmortem No. :-</td>
    <td width="223"><input name="pmno" type="text" required id="textfield"></td>
  </tr>
  <tr>
    <td>Fir No :-</td>
    <td><select name="firno" required id="select">  
    <?php
	$m=new MongoClient();
$query = $m->crime->fir->find();
foreach ( $query as $current )
	{
?>
    <option><?php echo $current["firno"]; ?></option>
 <?php } ?>
    </select></td>
  </tr>
  <tr>
    <td>Result of Mortem:-</td>
    <td><input name="result" type="text" required id="textfield3"></td>
  </tr>
  <tr>
    <td height="31"><p>Gender :-</p></td>
    <td><p>
      <label>
        <input name="gender" type="radio" id="RadioGroup1_0" value="Male">
        Male</label>
      <label>
        <input type="radio" name="gender" value="Female" id="RadioGroup1_1">
        Female</label>
      <br>
    </p></td>
  </tr>
  <tr>
    <td>Date of Death :-</td>
    <td><select name="day" id="select">
    <?php for($i=1;$i<=31;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
    </select>
      <select name="month" id="select2">
       <?php for($i=1;$i<=12;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
    </select>
      <select name="year" id="select3">
       <?php for($i=2005;$i<=2025;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
    </select></td>
  </tr>
  <tr>
    <td>Description of Case :-</td>
    <td><textarea name="desc" required id="textarea"></textarea></td>
  </tr>
  <tr>
    <td>Address :-</td>
    <td><textarea name="address" required id="textarea2"></textarea></td>
  </tr>
  <tr>
    <td>Doctors Name :-</td>
    <td><input name="doctor" type="text" required id="textfield4"></td>
  </tr>
  <tr>
    <td>Police Station :-</td>
    <td><input name="pstation" type="text" required id="textfield5"></td>
  </tr>
  <tr>
    <td height="67" colspan="2" align="center"><p>
      <input type="submit" name="submit" id="submit" value="Save">
    </p>
      <p><a href="PostmortemReport.php">Show Postmortem Report</a></p></td>
    
    
    
    <?php
  if(isset($_POST["submit"]))
{
$pmno=$_POST["pmno"];
$firno=$_POST["firno"];
$result=$_POST["result"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$desc=$_POST["desc"];
$add=$_POST["address"];
$doctor=$_POST["doctor"];
$pstation=$_POST["pstation"];

$m=new MongoClient();
$db=$m->crime;
$collection = $db->postmortem;

$document = array( 

"pmno" => "$pmno",
"firno" => "$firno",
"result" => "$result",
"gender" => "$gender",
"dob" => "$dob",
"desc" => "$desc",
"address" => "$add",
"doctor" => "$doctor",
"pstation" => "$pstation"
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
