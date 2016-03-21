<?php include './connect.php';
$table = "registration";
$fields = array(
    'first_name' => $_POST['first_name'],
    'surname' => $_POST['surname'],
    'username' => $_POST['username'],
    'password' => md5($_POST['password']),
    'id_no' => $_POST['id_no'],
    'dob' => $_POST['dob'],
    'tel' => $_POST['tel'],
    'email' => $_POST['email'],
    'model' => $_POST['model'],
    
);

if (isset($_POST['SubmitCheck'])) {
    save($fields, $table);
    //header("Location:registration.php?message=Registration Successful");
}

function save($fields, $table) {
    $query = 'INSERT INTO ' . $table . ' (' . implode(',', array_map('mysql_escape_string', array_keys($fields))) . ') VALUES ("' . implode('","', array_map('mysql_escape_string', $fields)) . '")';
    $result = mysql_query($query);
    echo $query;
    mysql_free_result($result);
    header("Location:registration.php?message=Registration Successful");
}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<script>
            function validateForm() {
                var firstname = document.forms["myForm"]["Fname"].value;
                if (firstname === null || firstname === "") {
                    alert("First name must be filled out");
                    return false;
                }
                var surname = document.forms["myForm"]["Lname"].value;
                if (surname === null || surname === "") {
                    alert("Surname must be filled out");
                    return false;
                }
                var username = document.forms["myForm"]["username"].value;
                if (username === null || username === "") {
                    alert("Username must be filled out");
                    return false;
                }
                var password = document.forms["myForm"]["password"].value;
                if (password === null || password === "") {
                    alert("Password must be filled out");
                    return false;
                }
                var id = document.forms["myForm"]["ID"].value;
                if (id === null || id === "") {
                    alert("ID / Passport must be filled out");
                    return false;
                }
                var dob = document.forms["myForm"]["DOB"].value;
                if (dob === null || dob === "") {
                    alert("DOB must be filled out");
                    return false;
                }
                
                var tel = document.forms["myForm"]["Tel"].value;
                if (tel === null || tel === "") {
                    alert("Telephone must be filled out");
                    return false;
                }
                var email = document.forms["myForm"]["Email"].value;
                if (email === null || email === "") {
                    alert("Email must be filled out");
                    return false;
                }
                
                var model = document.forms["myForm"]["model"].value;
                if (model === null || model === "") {
                    alert("Model must be filled out");
                    return false;
                }
                
//                var sum = document.forms["myForm"]["sum"].value;
//                
//                if (sum !== "11") {
//                    alert("Wrong value! Try Again");
//                    return false;
//                }
            }
        </script>
</head>
<body>
<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
<div id="main wrapper" align="center">
<div id="Page_header">
<?php include './nav.php';?>
<div id="pagecontent" align="center">
  <p style="float: right; margin-right: 20px;color: #222222"><strong><?php echo $_GET['message']; ?></strong></p>
</div>
</div>
<div id="pagefooter">
<p>Please Fill in all fields</p>
<form id="myForm" name="myForm" method="post" action="registration.php" onsubmit="return validateForm()">
  <table width="823" border="0" bordercolor="#FFFFFF">
    <tr>
      <td><label for="Fname2">First Name:</label></td>
      <td><input type="text" name="first_name" id="Fname" /></td>
    </tr>
    <tr>
      <td><label for="Lname">Surname:</label></td>
      <td><input type="text" name="surname" id="Lname" /></td>
    </tr>
      <tr>
      <td><label for="Lname">Username:</label></td>
      <td><input type="text" name="username" id="Lname" /></td>
    </tr>
      <tr>
      <td><label for="Lname">Password:</label></td>
      <td><input type="password" name="password" id="Lname" /></td>
    </tr>
    <tr>
      <td><label for="ID/Pass">ID/Passport number:</label></td>
      <td><input type="text" name="id_no" id="ID" /></td>
    </tr>
    <tr>
      <td>Date of Birth:</td>
      <td><input type="text" name="dob" id="DOB" /></td>
    </tr>
    <tr>
      <td>Tel:</td>
      <td><input type="text" name="tel" id="Tel" /></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" name="email" id="Email" /></td>
    </tr>
    <tr>
      <td>Car model:</td>
      <td><input type="text" name="model" id="model" /></td>
    </tr>
    <tr>
      <td colspan="2"><label>To make sure your human</label></td>
      </tr>
    <tr>
      <td><label for="sum">2+9=</label></td>
      <td><input type="text" name="sum" id="sum" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      </tr>
    <tr>
      <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
      <td><input type="hidden" name="SubmitCheck" id="Submit" value="Submit" /></td>
      <td><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

<div id="pagefooter">
<?php include './footer.php';?>

</div>
</body>
</html>