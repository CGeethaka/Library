<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Library Management System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
 
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Library Management System</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Register Here!</p>
        <form action="DBReg.php" method="post">
               <table id="example1" class="table table-bordered table-striped">
                <tr>
                	<td> <font class="Fstyle"> User Type </font></td>
                     <td><select name="txtStatus" required title="Select Status">
                            <option value="Librarian" SELECTED>Librarian</option>
                            <option value="Professor" >Professor </option>
                            <option value="Student"> Student </option>
                                                     
                        </select></td>
                </tr>
               
              	<tr>
                	<td>
                	<font class="Fstyle">	First Name </font>
                     </td>
                     <td> <input name="txtFname" type="text" required class="textbox" title="Type your first name" >			
                	</td>
                </tr>
                <tr>
                	<td> <font class="Fstyle"> Last Name </font> </td>
                     <td><input name="txtLname" type="txt" required class="textbox" title="Type your last name" ></td>
                </tr>
		        <tr>
                	<td> <font class="Fstyle"> NIC </font></td>
                     <td> <input name="txtNIC" type="text" required class="textbox" maxlength="10" title="Type your NIC No" ></td>
                </tr>
               <tr>
                	<td> <font class="Fstyle"> Gender </font></td>
                     <td> <select name="txtGender" class="select" title="Type your gender">
                <option value="Male" >Male </option>
                <option value="Female" >Female </option> </select></td>
                </tr>
                <tr>
                	<td><font class="Fstyle"> Address </font> </td>
                     <td><input name="txtAddress" type="text"  required class="textbox" title="Type your Address" ></td>
                </tr>
                <tr>
                	<td><font class="Fstyle"> Telephone </font></td>
                     <td> <input name="txtTelephone" type="number" required class="textbox" title="Type your Telephone" ></td>
                </tr>
				<tr>
                	<td><font class="Fstyle"> Email </font></td>
                     <td> <input name="txtEmail" type="email" required class="textbox" title="Type your email" ></td>
                </tr>
                <tr>
                	<td><font class="Fstyle"> Username </font> </td>
                     <td><input name="txtUsername" type="text" required class="textbox" title="Type your username" ></td>
                </tr>
                <tr>
                	<td> <font class="Fstyle"> Password </font></td>
                     <td><input name="txtPassword" type="password" required class="textbox" title="Type your password" ></td>
                </tr>
                
                                
                                
             </table>
                     <center> <input type="submit" value="Register" class="Sbutton" title="Click here to Register">				  				<center><br>
 Already a Member? &nbsp;<a href="login.php"> Login Now</a>
           
          
          
          <div class="row">
            <div class="col-xs-8">
             
            </div><!-- /.col -->
          <!-- /.col -->
          </div>
        </form><!-- /.social-auth-links --><br>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
