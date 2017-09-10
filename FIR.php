<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crime File Management</title>
</head>
<link href="style.css" type="text/css" rel="stylesheet">

<body>
<form name="fr" method="post">
<table width="960" height="624" border="0" align="center">
  <tr>
    <td height="171">
    <div class="heading">Crime File Management</div></td>
  </tr>
   <a href="UserHome.php"><h2>HOME</h2></a>
  <tr>
    <td height="447">
 <table width="408" height="445" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><h2>FIR</h2></td>
  </tr>
  <tr>
    <td width="185">FIR No.:-</td>
    <td width="207"><input name="firno" type="text" required id="textfield"></td>
  </tr>
  <tr>
    <td>Complaint No:-</td>
    <td><select name="compno" required id="select">  
    <?php
	$m=new MongoClient();
$query = $m->crime->complaint->find();
foreach ( $query as $current )
	{
?>
    <option><?php echo $current["compno"]; ?></option>
 <?php } ?>
    </select></td>
  </tr>
  <tr>
    <td>Date:-</td>
    <td><select name="day" required id="select2">
    <?php for($i=1;$i<=31;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
    
    </select>
      <select name="month" required id="select3">
    <?php for($i=1;$i<=12;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
   
   
    </select>
      <select name="year" required id="select4">
    <?php for($i=2010;$i<=2025;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
   
    </select></td>
  </tr>
  <tr>
    <td>Time:- </td>
    <td><select name="hr" required id="select5">
    <?php for($i=1;$i<=12;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
   
    </select>
   
      <select name="min" id="select6">
       <?php for($i=0;$i<=59;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
   
    </select>
      <select name="time" id="select7">
      <option> AM</option>
      <option> PM </option>
    </select></td>
  </tr>
  <tr>
    <td>Type of Crime:-</td>
    <td><input type="text" name="type" id="textfield2"></td>
  </tr>
  <tr>
    <td>Crime Description:-</td>
    <td><textarea name="desc" id="textarea"></textarea></td>
  </tr>
  <tr>
    <td>Place :-</td>
    <td><input type="text" name="place" id="textfield3"></td>
  </tr>
  <tr>
    <td>Informant Address:- </td>
    <td><textarea name="infadd" id="textarea3"></textarea></td>
  </tr>
  <tr>
    <td>Name of Police :-</td>
    <td><input type="text" name="police" id="textfield4"></td>
  </tr>
  <tr>
    <td>Received Time:-</td>
    <td><select name="rhr" id="select8">
     <?php for($i=1;$i<=12;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
   
    </select>
      <select name="rsec" id="select9">
    <?php for($i=0;$i<=59;$i++){ ?>
    <option><?php echo $i; ?></option>
    <?php } ?>
   
    </select>
      <select name="rtime" id="select10">
      <option> AM </option>
      <option> PM </option>
    </select></td>
  </tr>
  <tr>
    <td>Imformation received :-</td>
    <td><textarea name="info" id="textarea2"></textarea></td>
  </tr>
  <tr>
    <td height="67" colspan="2" align="center"><p>
     
      <input type="submit" name="submit" id="submit" value="Save">
     </p>
      <p><a href="FIRReport.php">Show FIR Report</a></p></td>
    
    
       <?php
  if(isset($_POST["submit"]))
{
$firno=$_POST["firno"];
$compno=$_POST["compno"];
$date=$_POST["day"].":".$_POST["month"].":".$_POST["year"];
$time=$_POST["hr"].":".$_POST["min"].":".$_POST["time"];
$type=$_POST["type"];
$desc=$_POST["desc"];
$place=$_POST["place"];
$infadd=$_POST["infadd"];
$police=$_POST["police"];
$rtime=$_POST["rhr"].":".$_POST["rmin"].":".$_POST["rtime"];
$info=$_POST["info"];

$m=new MongoClient();
$db=$m->crime;
$collection = $db->fir;

$document = array( 
"firno" => "$firno",
"compno" => "$compno",
"date" => "$date",
"time" => "$time",
"type" => "$type",
"desc" => "$desc",
"place" => "$place",
"infadd" => "$infadd",
"police" => "$police",
"rtime" => "$rtime",
"info" => "$info",

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
