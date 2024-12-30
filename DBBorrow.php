
<?php 

// Connect to Database
$db = mysql_connect('localhost','root') or die('Error');

// Select Database
mysql_select_db('Library',$db);

$count = $_POST["count"];

for($i = 1; $i <= $count; $i++ ) {
// Retrieve data from textfields
    $sid = $_POST["SID-".$i];
	$fname = $_POST["FName-".$i];
	$grade = $_POST["Grade"];
	$att = $_POST["txtAtt-".$i];
	$dis = $_POST["txtDis-".$i];
	
//SQL insert query	
	$query='UPDATE `marks` SET `SName`="'.$fname.'",`Grade`="'.$grade.'",`Attendance_Marks`="'.$att.'",`Discipline_Marks`="'.$dis.'" WHERE `SID`="'.$sid.'"';
			
			
			mysql_query($query);
			$rows = mysql_affected_rows();
}
			if($rows > 0)
				echo "<script> alert('You are successfully Added '); location.href='AddAttMarks.php'; </script>";
				
			else
			{
				echo "<script> alert('Fail to Add '); location.href='AddAttMarks.php'; </script>";
			}
			

?>