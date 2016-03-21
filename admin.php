<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator</title>
</head>
<body>
<!--<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />-->
<div id="main wrapper" align="center">
<div id="Page_header">
<?php include './admin_nav.php';?>
<div id="pagecontent" align="center">
    <p><strong>ADMINISTRATOR'S PANEL</strong></p>
    <p style="float: right; margin-right: 20px;color: #cc0033"><strong><?php echo $_GET['message']; ?></strong></p>
  <p><img class="imgl" src="file:///A|/stage3 sem2/Projo/kiplooo/Waitittu/Logo/Logo2.gif" alt="" width="162" height="167" align="left" /></p>

  <form enctype="multipart/form-data" action="uploader.php" method="POST">
    
    <fieldset>
        <legend>Update Services</legend>
        <table align="center">
            <tr>
                <td>Name:</td>
                <td><input type="text" name ="name" id="name" />
                    
                </td>
            </tr>


            <tr>
                <td>Price:</td>
                <td><input type="text" name ="price" id="price" /></td>
            </tr>
            <tr>
                <td>Picture:</td>
                <td><input name="uploadedfile" type="file" />
                    
                </td>
            </tr>


            <tr>
                <td>Description:</td>
                <td><textarea name="description" id="description" cols="45" rows="5"></textarea></td>
            </tr>

            
            <tr>
                <input type="hidden" name ="submitCheck" />
                <td colspan="2"><input type="submit" value="Save" /></td><td colspan="2"><input type="reset" value="Cancel" /></td>
            </tr>
        </table>
    </fieldset>
</form>
  
  
  
  
</div>
</div>
<div id="pagefooter">
<?php include './footer.php';?>

</div>
</body>
</html>