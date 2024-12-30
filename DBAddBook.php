
<?php 

// Connect to Database
$db = mysql_connect('localhost','root') or die('Error');

// Select Database
mysql_select_db('Library',$db);
// Retrieve data from textfields
    $bid = $_POST["txtBID"];
	$name = $_POST["txtBName"];
	$des = $_POST["txtBDesc"];
	$dob =$_POST["txtBDAY"];
	$au = $_POST["txtBAu"];
	$qty = $_POST["txtQty"];
	$cat = $_POST["txtCat"];
//SQL insert query	
	$query = 'INSERT INTO `book`(`BID`, `Title`, `Description`, `Category`, `Author`, `Date_publish`, `Qty`) VALUES ("'.$bid.'","'.$name.'","'.$des.'","'.$cat.'","'.$au.'","'.$dob.'","'.$qty.'")';
			
			
			mysql_query($query);
			$rows = mysql_affected_rows();
			if($rows > 0)
				echo "<script> alert('You are successfully Added '); location.href='AddBook.php'; </script>";
				
			else
			{
				echo "<script> alert('Book already exist '); location.href='AddBook.php'; </script>";
			}
			

?>