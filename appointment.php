
<?php
include './connect.php';
$table = "appointment";
$fields = array(
    'fname' => $_POST['Fname'],
    'surname' => $_POST['Surname'],
    'town' => $_POST['Town'],
    'tel' => $_POST['Tel'],
    'email' => $_POST['Email'],
    'reg' => $_POST['Reg'],
    'model' => $_POST['Model'],
    'make' => $_POST['Make'],
    'service' => $_POST['Service'],
    'date' => $_POST['Date']
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
    <script language="javascript" type="text/javascript" src="datetimepicker.js">
    </script>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Appointment</title>
        <script>
            function validateForm() {
                var firstname = document.forms["myForm"]["Fname"].value;
                if (firstname === null || firstname === "") {
                    alert("First name must be filled out");
                    return false;
                }
                var surname = document.forms["myForm"]["Surname"].value;
                if (surname === null || surname === "") {
                    alert("Surname must be filled out");
                    return false;
                }
                var town = document.forms["myForm"]["Town"].value;
                if (town === null || town === "") {
                    alert("Town must be filled out");
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
                var reg = document.forms["myForm"]["Reg"].value;
                if (reg === null || reg === "") {
                    alert("Reg must be filled out");
                    return false;
                }
                var model = document.forms["myForm"]["Model"].value;
                if (model === null || model === "") {
                    alert("Model must be filled out");
                    return false;
                }
                var make = document.forms["myForm"]["Make"].value;
                if (make === null || make === "") {
                    alert("Make must be filled out");
                    return false;
                }
                var service = document.forms["myForm"]["Service"].value;
                if (service === null || service === "") {
                    alert("Service must be filled out");
                    return false;
                }
                var date = document.forms["myForm"]["Date"].value;
                if (date === null || date === "") {
                    alert("Date must be filled out");
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
                <?php include './nav.php'; ?>
                <div id="pagecontent" align="center">
                    <form id="myForm" name="myForm" method="post" action="appointment.php" onsubmit="return validateForm()">
                        <p>So you want to book an appointment with us NICE!!!</p>
                        <p>Please fill in your details below</p>
                        <table width="908" border="0" bordercolor="#FFFFFF">
                            <tr>
                                <td><label><strong>Personal Details</strong></label>
                                    <strong>&nbsp;</strong></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                
                            </tr>
                            <tr>
                                <td><label for="Fname2">First Name:</label></td>
                                <td><input type="text" name="Fname" id="Fname" /></td>
                            </tr>
                            <tr>
                                <td>Surname:</td>
                                <td><input type="text" name="Surname" id="Surname" /></td>
                            </tr>
                            <tr>
                                <td><label for="Town">Town/City:</label></td>
                                <td><input type="text" name="Town" id="Town" /></td>
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
                                
                            </tr>
                            <tr>
                                <td><strong>Your Car Details</strong></td>
                                
                            </tr>
                            <tr>
                                <td><label for="Reg">Car Registration:</label>
                                    <label> </label>
                                    
                                <td><input type="text" name="Reg" id="Reg" /></td>
                            </tr>
                            <tr>
                                <td><label for="Model">Model:</label></td>
                                <td><input type="text" name="Model" id="Model" /></td>
                            </tr>
                            <tr>
                                <td><label for="Make">Make:</label></td>
                                <td><input type="text" name="Make" id="Make" /></td>
                            </tr>
                            <tr>
                                
                            </tr>
                            <tr>
                                <td><strong>Your Appointment</strong></td>
                               
                            </tr>
                            <tr>
                                <td><label for="Service">Service:</label></td>
                                <td><select name="Service" id="Service">
                                        <option>Air conditioning</option>
                                        <option>Brakes</option>
                                        <option>Batteries</option>
                                        <option>Collision Repair</option>
                                        <option>Computerized Alignment</option>
                                        <option>Exhaust</option>
                                        <option>Shocks and struts</option>
                                        <option>Tire Repair</option>
                                        <option>Transmission maintenance</option>
                                        <option>Tune ups</option>
                                        <option>Wheel Balancing</option>
                                        <option>Other</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Prefered date:</td>
                                <td><input type="Text" id="demo1" maxlength="25" size="30" name="Date" />
                                    <a href="javascript:NewCal('demo1','ddmmmyyyy',true,24)"><img src="cal.gif" width="25" height="21" border="0" alt="Pick a date" /></a></td>
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
                    <?php include './footer.php'; ?>

                </div>
                </body>
                </html>