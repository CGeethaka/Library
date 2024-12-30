<?php
session_start();
?>

<?php
 // Connect to DB
$db = mysql_connect('localhost','root') or die('Error');

// Select DB
mysql_select_db('Library',$db);


$un = $_POST['txtUsername'];
$pw = $_POST['txtPassword'];
$status = $_POST['txtStatus'];

 
$query = 'SELECT * FROM login WHERE Username = "'.$un.'" AND Password = "'.$pw.'" AND Status = "'.$status.'"';

     mysql_query($query) or die(mysql_error());
			$rows = mysql_affected_rows();
			$details = mysql_query($query);


  if ($rows == 1 && $status == 'Librarian')
    {
		while($detailRows=mysql_fetch_array($details))
		   {
			$_SESSION['Librarian'] = $detailRows["FName"];
		   }
		$_SESSION['logged_user']=$un;
        header('Location: index.php');
    }
	
    elseif ($rows == 1 && $status == 'Professor')
    {
		$_SESSION['logged_Professor']=$un;
		header('Location: Professor/index.php');
    }
	
	elseif($rows == 1 && $status == 'Student')
	{
		$_SESSION['logged_Student']=$un;
	    header('Location: Student/index.php');
	}
	
		
	else
	{
		 $msg = "Login Failed, Invalid Username or Password!!!";
            header("Location:login.php?msg=$msg");
    }
	 

?>
