

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $product_name;?></title>
        <!--Add jQuery library-->
        <script type="text/javascript" src="jquery-1.8.0.min.js"></script>

        
    </head>
    
    <body>
                      
        
        <?php

include './connect.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_GET['id'])){
    $id = preg_replace('#[^0-9]#i', '', $_GET['id']);
    $result = mysql_query("SELECT * FROM `services` WHERE id = '".$id."'LIMIT 1") or
        die("Error" . mysql_error());
    if(mysql_num_rows($result)>0){
       
        while ($row = mysql_fetch_array($result)) {
    //echo '<td>' . $row["id"] . '</td><br/>';
                        echo '<tr><td><strong>Name  :    </strong></td>' . $row["name"] . '</td></tr><br/>';
                        //echo '<td><strong>Price   :    </strong>' . $row["Selling Price"] . '</td><br/>';
                        echo '<td><strong>Description   :    </strong>' . $row["description"] . '</td><br/>';
//                        echo '<td><strong>Class   :    </strong>' . $row["class"] . '</td><br/>';
                        //echo '<td>' . $row["sub_category"] . '</td><br/>';
                        //echo '<td>' . strftime("%b %d,%Y",  strtotime($row["date_added"])) . '</td><br/>';
                        //echo '<td><a href="product.php?id='.$row["id"].'">View Product</a></td><br/>';
                        echo "</tr><br/>";
    $product_name = $row["name"];
}
    }  else {
        echo 'that item does not exist ';
    exit();
    }
}  else {
    echo 'No Product in the system with that Data to render this page is missing';
    exit();
    
}


//include 'connect.php';
//$result = mysql_query("SELECT * FROM `products`") or
//        die("Error" . mysql_error());
//while ($row = mysql_fetch_array($result)) {
//    echo '<td>' . $row["id"] . '</td><br/>';
//    echo '<td>' . $row["product_name"] . '</td><br/>';
//    echo '<td>' . $row["price"] . '</td><br/>';
//    echo '<td>' . $row["category"] . '</td><br/>';
//    echo '<td>' . $row["sub_category"] . '</td><br/>';
//    echo '<td>' . $row["date_added"] . '</td><br/>';
//    echo '<td><a href="product.php?id=' . $row["id"] . '">View Product</a></td><br/>';
//    echo "</tr><br/>";
//}
?>
         <form method="POST" action="shopping_cart.php">
            <input type="hidden" name="pid" id="pid" value="<?php echo $id?>"/>
            
            <input type="submit" name="button" id="button" value="Add To Shopping Cart"/>
        </form>
 </div>
        
        
        
        
    </body>
</html>

