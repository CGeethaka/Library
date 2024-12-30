
<?php 

// Connect to DB
$db = mysql_connect('localhost','root') or die('Error');

// Select DB
mysql_select_db('Library',$db);

 $bid = $_POST["txtBID"];
	$name = $_POST["txtBName"];
	$des = $_POST["txtBDesc"];
	$dob =$_POST["txtBDAY"];
	$au = $_POST["txtBAu"];
	$qty = $_POST["txtQty"];
	$cat = $_POST["txtCat"];

$query='UPDATE `book` SET `Title`="'.$name.'",`Description`="'.$des.'",`Category`="'.$cat.'",`Author`="'.$au.'",`Date_publish`="'.$dob.'",`Qty`="'.$qty.'" WHERE `BID`="'.$bid.'" ';


mysql_query($query);
$rows = mysql_affected_rows();
if($rows > 0){
 echo "<script> alert('You are successfully updated Book details '); location.href='EditBook.php'; </script>";
}

else
{
  echo "<script> alert('Fail to update Book details '); location.href='EditBook.php'; </script>";
}
?>