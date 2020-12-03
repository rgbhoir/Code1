<?php 

$ipbread = ($_POST["bread"]>=0)?$_POST["bread"]:0;
$ipvadapav = ($_POST["vadapav"]>=0)?$_POST["vadapav"]:0;
$ipsamosapav = ($_POST["samosapav"]>=0)?$_POST["samosapav"]:0;
$ipvadapavcost = ($_POST["vadapavcost"]>=0)?$_POST["vadapavcost"]:0;
$ipsamosapavcost = ($_POST["samosapavcost"]>=0)?$_POST["samosapavcost"]:0;

$bread = $ipbread;
$vada = $ipvadapav;
$samosa = $ipsamosapav;
$vadapavCost =$ipvadapavcost;
$samosapavCost = $ipsamosapavcost;

//Type 1 
//Unused Pav after Allotment Type1 : First Vadapav
$vadaFirst = $bread - ($vada*2);   //No of unused pav after making VadaPav  5
$samosaSecond = $vadaFirst - ($samosa*2);

while($samosaSecond<=0)
{	
	$samosa=$samosa-1;
	$samosaSecond = $vadaFirst - ($samosa*2);  //No of unused pav after making SamosaPav  1
}	

$noofvadapav1 = $vada;
$noofsamosapav1 = $samosa;

$vadapavProfit = $vadapavCost * $vada;
$samosapavProfit = $samosapavCost * $samosa;

$totalprofit1=$vadapavProfit + $samosapavProfit;



//Type 2 
$bread = $ipbread;
$vada = $ipvadapav;
$samosa = $ipsamosapav;
$vadapavCost =$ipvadapavcost;
$samosapavCost = $ipsamosapavcost;

//Unused Pav after Allotment Type1 : First Samosapav
$samosaFirst = $bread - ($samosa*2);   //No of unused pav after making SamosaPav  4
$vadaSecond = $samosaFirst - ($vada*2);

while($vadaSecond<=0)
{	
	$vada=$vada-1;
	$vadaSecond = $samosaFirst - ($vada*2);  //No of unused pav after making vadaPav 
}	
$noofvadapav2 = $vada;
$noofsamosapav2 = $samosa;

$vadapavProfit = $vadapavCost * $vada;
$samosapavProfit = $samosapavCost * $samosa;

$totalprofit2=$vadapavProfit + $samosapavProfit;


if($totalprofit1 > $totalprofit2)
{
	echo "Total Vadapav: " . $noofvadapav1. "<br>";
	echo "Total Samosapav: " .$noofsamosapav1. "<br>";
	echo "Total Maximum Profit: " .$totalprofit1. "<br>";
	
}
else
{
	echo "Total Vadapav: " . $noofvadapav2. "<br>";
	echo "Total Samosapav: " . $noofsamosapav2. "<br>";
	echo "Total Maximum Profit: " . $totalprofit2. "<br>";
}
?>