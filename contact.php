<?php
include './connect.php';
$table = "feedback";
$fields = array(
    'name' => $_POST['Name'],
    'tel' => $_POST['Tel'],
    'email' => $_POST['Email'],
    'message' => $_POST['Message']
);

if (isset($_POST['SubmitCheck'])) {
    save($fields, $table);
}

function save($fields, $table) {
    $query = 'INSERT INTO ' . $table . ' (' . implode(',', array_map('mysql_escape_string', array_keys($fields))) . ') VALUES ("' . implode('","', array_map('mysql_escape_string', $fields)) . '")';
    $result = @mysql_query($query);
    mysql_free_result($result);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact us</title>
</head>
<body>
<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
<div id="main wrapper" align="center">
<div id="Page_header">
<?php include './nav.php';?>
<div id="pagecontent" align="center">
  <p>For any question or comment you would wish to share with us please fill the form below and we will get back to you as soon as possible.</p>
  <form id="form1" name="form1" method="post" action="">
     <table width="898" height="340" border="0" bordercolor="#FFFFFF">
      <tr>
        <td width="118"><label for="Name2">Name:</label></td>
        <td width="483"><input type="text" name="Name" id="Name" /></td>
      </tr>
      <tr>
        <td><label for="Tel">Tel:</label></td>
        <td><input type="text" name="Tel" id="Tel" /></td>
      </tr>
      <tr>
        <td><label for="Email">Email:</label></td>
        <td><input type="text" name="Email" id="Email" /></td>
      </tr>
      <tr>
        <td><label for="Messgae">Message, question, Comment:</label></td>
        <td><textarea name="Message" id="Message" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
        <td><input type="hidden" name="SubmitCheck" id="Submit" value="Submit" /></td>
        <td><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
      </tr>
</table>
    
  </form>
  
</div>
</div>
<div id="pagefooter">
<?php include './footer.php';?>

</div>
</div>
</div>
</body>
</html>