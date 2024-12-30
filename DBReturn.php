
<?php 

// Connect to DB
$db = mysql_connect('localhost','root') or die('Error');

// Select DB
mysql_select_db('Library',$db);

    $borid = $_POST["txtBorID"];
	$name = $_POST["txtBName"];
	$bid = $_POST["txtBID"];
	$dob =$_POST["txtDate"];
	$un =$_POST["txtUN"];
	$st = $_POST["txtStatus"];
	$qty = $_POST["txtQty"];
	$cat = $_POST["txtCat"];
    $lp = $_POST["txtLPrice"];

$query='UPDATE `borrowing` SET `BName`="'.$name.'",`Category`="'.$cat.'",`BID`="'.$bid.'",`Username`="'.$un.'",`Qty`="'.$qty.'",`Date`="'.$dob.'",`Status`="'.$st.'",`LPrice`="'.$lp.'" WHERE `BorID`="'.$borid.'" ';


mysql_query($query);
$rows = mysql_affected_rows();
if($rows > 0){
 echo "<script> alert('You are successfully updated Book details '); location.href='Return.php'; </script>";
}

else
{
  echo "<script> alert('Book Already Returned '); location.href='Return.php'; </script>";
}
?>