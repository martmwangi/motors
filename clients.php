<?php


include './connect.php';
?>
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
    
    <h2>Clients</h2>
        <table class="table table-striped">
            <thead>

            <th>First Name</th>
            <th>Surname</th>
            <th>ID No.</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Model</th>
            
        </thead>

        <?php
        session_start();
        $s_per_page = 5;

        $s_pages_query = mysql_query("SELECT COUNT(`id`) FROM `registration`");
        $s_pages = ceil(mysql_result($s_pages_query, 0) / $s_per_page);
        $s_page = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;
        $s_start = ($s_page - 1) * $s_per_page;
        $result = mysql_query("SELECT * FROM `registration` LIMIT $s_start, $s_per_page ");
        while ($row = mysql_fetch_array($result)) {
            echo "<tr>";
            echo '<td>' . $row['first_name'] . '</td>';
            echo '<td>' . $row['surname'] . '</td>';
            echo '<td>' . $row['id_no'] . '</td>';
            echo '<td>' . $row['tel'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['model'] . '</td>';
            echo "</tr>";
            
        }
        ?>

    </table>
    <style>
        #form_pages li{
            display: inline-block;
        }
    </style>
            <div class="pagination">
                <ul id="form_pages">

                    
                    <li>
                        <form id="me">
            <table >
                <tr>
                    <td style="padding-left: 20px;"> <?php
                    $last=5;
                    for ($x = 0; $x < $last; $x++) {

                        $curr = $x + 1;
                        echo '<li><a href="clients?page=' . $curr . '">' . $curr . '</a></li>';
                        
                    }
                    
                    ?></td>
                    <td>
                    <select id="pages" onChange="change()">
                    <option value="-1">Other Pages</option>
                    <?php 
					//pagination code continued
                        if($s_pages >= 1 && $s_page <= $s_pages){
                            for($i=6; $i<=$s_pages; $i++){
                                echo ($i == $s_page) ? '<option value="'.$i.'">' .$i. '</a></option>' : '<option value="'.$i.'">' .$i. '</option>';
                            }
                        }
                    ?>
                	</select>
                    </td><td colspan="1"></td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td style="padding-left: 20px;">Current Page: <?php echo $_GET['page'];?></td>
                </tr>
            </table>
        </form>
                    </li>
                    
                    <li> </li>
                </ul>
                
                
    
    </div>
    <script type="text/javascript">
		function change(){
		var page = me.pages.options[me.pages.options.selectedIndex].value;
		
		window.location.href = "http://localhost/Motors/clients.php?page=" + page;	
		}
	</script>
            
</body>
</html>