

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store</title>
</head>
<body>
<link rel="stylesheet" href="file:///A|/stage3 sem2/Projo/kiplooo/Waitittu/Chill new/Style/style.css" type="text/css" media="screen" />
<div id="main wrapper" align="center">
<div id="Page_header">
<?php include './store_nav.php';?>
<div id="pagecontent" align="justify">
  <p>KENYA MOTORS</p>
  <div id="wb_Text124" style="width:148px;height:14px;z-index:128" align="left"><div style="height:270px;width:1100px;font:16px/26px Helvetica;overflow:auto;">                   
        <table width="1082" border="0" bordercolor="#FFFFFF" align="center" >
    
  <?php 
include './connect.php';
$sql= "SELECT * FROM store ";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];
    $image = $row['image'];
    $seller = $row['seller'];
    $contact = $row['contact'];
    echo '
      <tr>  
      <td><strong>'.$name.'</strong></td><td width="46">'.$description.'</td>
      <td style="padding-left:100px;"><img src="uploads/store/'.$image.'" width="119" height="118" alt="'.$image.'" /></td>
      <td style="padding-left:100px;">'.$price.'</td>
          <td style="padding-left:100px;">'.$seller.'</td>
              <td style="padding-left:100px;">'.$contact.'</td>
      </tr> 
      
    ';
    
}


?>
  
    
</table>
</div>
  </div>
 
</div>
    <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="pagefooter">
<?php include './footer.php';?>

</div>

</body>
</html>