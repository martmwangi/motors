<?php


include './connect.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store</title>
</head>
<body>
<!--<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />-->
<div id="main wrapper" align="center">
<div id="Page_header">
<?php include './admin_nav.php';?>
    
    <h2>Store</h2>
        

        <?php
        include './connect.php';
$sql= "SELECT * FROM store WHERE name LIKE '%".$_GET['search']."%'";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];
    $image = $row['image'];
    $seller = $row['seller'];
$contact = $row['contact'];

}
        ?>

   
    
    <form >
    
    <fieldset>
        <legend>Store Results</legend>
        <table align="center">
            <tr>
                <td>Name:</td>
                <td><input type="text" name ="name" height="23px" id="name" value="<?php echo $name;?>"/>
                    
                </td>
            </tr>


            <tr>
                <td>Price:</td>
                <td><input type="text" name ="price" id="price" value="<?php echo $price;?>"/></td>
            </tr>
            


            <tr>
                <td>Description:</td>
                <td><textarea name="description" id="description" cols="45" rows="5"><?php echo $description;?></textarea></td>
            </tr>

            <tr>
                <td>Seller:</td>
                <td><input type="text" name ="seller" id="name" value="<?php echo $seller;?>"/>
                    
                </td>
            </tr>


            <tr>
                <td>Contact:</td>
                <td><input type="text" name ="contact" id="price" value="<?php echo $contact;?>"/></td>
            </tr>
            
<!--            <tr>
                <input type="hidden" name ="submitCheck" />
                <td colspan="2"><input type="submit" value="Save" /></td><td colspan="2"><input type="reset" value="Cancel" /></td>
            </tr>-->
        </table>
    </fieldset>
</form>
            
</body>
</html>