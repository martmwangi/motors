
<?php
include './connect.php';
$table = "users";
$fields = array(
    //first_name 	last_name 	phone 	username 	password 	category
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'phone' => $_POST['phone'],
    'username' => $_POST['username'],
    'password' => md5($_POST['password']),
    'category' => $_POST['category']
);

if (isset($_POST['SubmitCheck'])) {
    save($fields, $table);
}

function save($fields, $table) {
    $query = 'INSERT INTO ' . $table . ' (' . implode(',', array_map('mysql_escape_string', array_keys($fields))) . ') VALUES ("' . implode('","', array_map('mysql_escape_string', $fields)) . '")';
    $result = @mysql_query($query);
    header("Location:staff?message=Success");
    mysql_free_result($result);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <script language="javascript" type="text/javascript" src="datetimepicker.js">
    </script>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Appointment</title>
        <script>
            function validateForm() {
                var firstname = document.forms["myForm"]["first_name"].value;
                if (firstname === null || firstname === "") {
                    alert("First name must be filled out");
                    return false;
                }
                var surname = document.forms["myForm"]["last_name"].value;
                if (surname === null || surname === "") {
                    alert("Last name must be filled out");
                    return false;
                }
                var phone = document.forms["myForm"]["phone"].value;
                if (phone === null || phone === "") {
                    alert("Phone must be filled out");
                    return false;
                }
                var tel = document.forms["myForm"]["username"].value;
                if (tel === null || tel === "") {
                    alert("Telephone must be filled out");
                    return false;
                }
                var email = document.forms["myForm"]["password"].value;
                if (email === null || email === "") {
                    alert("Password must be filled out");
                    return false;
                }
                var reg = document.forms["myForm"]["category"].value;
                if (reg === null || reg === "") {
                    alert("Category must be filled out");
                    return false;
                }
                
            }
        </script>
    </head>
    <body>
        <!--<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />-->
        <div id="main wrapper" align="center">
            <div id="Page_header">
                <?php include './admin_nav.php'; ?>
                <p style="float: right; margin-right: 20px;color: #222222"><strong><?php echo $_GET['message']; ?></strong></p>
                <div id="pagecontent" align="center">
                    <form id="myForm" name="myForm" method="post" action="staff.php" onsubmit="return validateForm()">
                        
                        <table width="908" border="0" bordercolor="#FFFFFF">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><label><strong>Staff Details</strong></label>
                                    <strong>&nbsp;</strong></td>
                                <td>&nbsp;</td>
                            </tr>
                            
                            <tr>
                                <td><label for="Fname2">First Name:</label></td>
                                <td><input type="text" name="first_name" id="first_name" /></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="last_name" id="last_name" /></td>
                            </tr>
                            <tr>
                                <td><label for="Town">Phone:</label></td>
                                <td><input type="text" name="phone" id="phone" /></td>
                            </tr>
                            <tr>
                                <td><label for="Tel">Username:</label></td>
                                <td><input type="text" name="username" id="Tel" /></td>
                            </tr>
                            <tr>
                                <td><label for="Email">Password:</label></td>
                                <td><input type="password" name="password" id="Email" /></td>
                            </tr>
                            <tr>
                                <td><label for="category">Category:</label></td>
                                <td><select name="category" id="category">
                                        <option>Admin</option>
                                        <option>Staff</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td></td><td><input type="reset" name="Reset" id="Reset" value="Reset" /><input style="margin-left: 120px;" type="submit" name="Submit" id="Submit" value="Submit" /></td>
                                <td></td>
                            </tr>
                            
                            <tr><td><input type="hidden" name="SubmitCheck" id="Submit" value="Submit" /></td>
                                
                            </tr>
                        </table>
                        <p>&nbsp; </p>
                        <p>&nbsp;</p>
                        
                    </form>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    
                </div>
            </div>
            <div id="pagefooter">
                <p>&nbsp;</p>

                <div id="pagefooter">
                    <?php include './footer.php'; ?>

                </div>
                </body>
                </html>