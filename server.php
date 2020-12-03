<?php 
$server = 2;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$server = ($_POST["server"]>=0)?$_POST["server"]:0;
	$load1 = ($_POST["min1"]>=0)?$_POST["min1"]:0;
	$load2 = ($_POST["min2"]>=0)?$_POST["min2"]:0;
	$load3 = ($_POST["min3"]>=0)?$_POST["min3"]:0;
	$load4 = ($_POST["min4"]>=0)?$_POST["min4"]:0;
	$load5 = ($_POST["min5"]>=0)?$_POST["min5"]:0;

	$loads = array($load1, $load2, $load3, $load4, $load5);

	foreach($loads as $minute => $load_value) { 
	  if($load_value<50)
	  {
		  $server = (int) ($server /2) ;	  
	  }
	  else
	  {
		  $server = 2*$server + 1 ;
	  }  
	}
	echo "<b>No. of server running after 5 minutes interval: ". $server. "</b>";
}
else 
{
	echo "No. of server running in the Intial Stage: ". $server;
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Checking Server Load</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <label for="server">Number of Servers:</label><br>
  <input type="text" id="server" name="server" value= "2" required><br>
  
  <label for="min1">Server Load @1 minute:</label><br>
  <input type="text" id="min1" name="min1" value= "10"><br><br>
  
  
  <label for="min2">Server Load @2 minute:</label><br>
  <input type="text" id="min2" name="min2" value= "60"><br><br>
  
  
  <label for="min3">Server Load @3 minute:</label><br>
  <input type="text" id="min3" name="min3" value= "50"><br><br>
  
  
  <label for="min4">Server Load @4 minute:</label><br>
  <input type="text" id="min4" name="min4" value= "15"><br><br>
  
  
  <label for="min5">Server Load @5 minute:</label><br>
  <input type="text" id="min5" name="min5" value= "20"><br><br>  
  
  <input type="submit" value="Submit">
</form> 
</body>
</html>
