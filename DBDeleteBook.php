
<?php // Connect to DB
$db = mysql_connect('localhost','root') or die('Error');

// Select DB
mysql_select_db('Library',$db);

$bid = $_POST["txtBID"];

$query = 'DELETE FROM `book` WHERE BID="'.$bid.'"';


mysql_query($query);
			$rows = mysql_affected_rows();
			if($rows > 0)
				echo "<script> alert('You are successfully deleted the book details '); location.href='DeleteBook.php'; </script>";
				
			else
			{
				echo "<script> alert('Fail To Delete '); location.href='DeleteBook.php'; </script>";
			}



?>