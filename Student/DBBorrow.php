<?php
session_start();
?>
<?php 

// Connect to Database
$db = mysql_connect('localhost','root') or die('Error');

// Select Database
mysql_select_db('Library',$db);
// Retrieve data from textfields
    $bid = $_POST["txtBID"];
	$name = $_POST["txtBName"];
	$cat = $_POST["txtCat"];
	$Username = $_SESSION['logged_Student'];
	$date = date("l, d F, Y");
	$qty = $_POST["txtQty"];
	$st = $_POST["txtStatus"];
//SQL insert query	
	$query = 'INSERT INTO `borrowing`(`BName`, `Category`, `BID`, `Username`, `Qty`, `Date`, `Status`) VALUES ("'.$name.'","'.$cat.'","'.$bid.'","'.$Username.'","'.$qty.'","'.$date.'","'.$st.'")';
			
			
			mysql_query($query);
			$rows = mysql_affected_rows();
			if($rows > 0)
				echo "<script> alert('You are successfully Borrowed '); location.href='Borrow.php'; </script>";
				
			else
			{
				echo "<script> alert('You Already Borrowed This Book '); location.href='Borrow.php'; </script>";
			}
			

?>