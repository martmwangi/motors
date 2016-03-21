<?php

?>
<link rel='stylesheet' type='text/css' href='./css/menu.css' />
<link href="css/bootstrap.css" rel="stylesheet">  
<div style="background: #B50416; height: 35px;color: #FFFFFF;text-align: left;padding-left: 30px;padding-top: 10px;margin-top:0;font-family: Helvetica;font-size: 18px;">
  Kenya Motors Tel:0710871782 Email: kmotors@gmail.com  
    
</div>
<div style="background: #000; height: 65px;">
  <div style="float:right ;position: relative;top: 20px;">
                                <form class="navbar-form pull-right" action="system_login.php" method="POST" style="float: right;margin-right: 20px">
                                    <input type="text" placeholder="username" name="username" class="input-small"/>
                                    <input type="password" placeholder="Password" name="password" class="input-small"/>
                                    <input type="hidden"  name="submit_" class="input-small"/>
                                    <button class="btn" type="submit">Login</button>
                                </form>

        </div>
    
</div>
<div style="background: #333333; height: 45px;position: absolute;top:110px;width:100%" >
    <ul id="menu">
        <li><a href="index">HOME</a></li>
      <li><a href="available_services">SERVICES</a></li>
      <li><a href="appointment">APPOINTMENT</a></li>
      <li><a href="store">STORE</a>
        <ul>
        <li><a href="our_store">AVAILABLE COMMODITIES</a></li>
        
        </ul>
      </li>
      <li><a href="contact.php">CONTACT US</a></li> 
      
    </ul>
    <form class="navbar-form pull-right" action="search_store.php" method="GET" style="float: right; margin-left: 30px;">
                                    <input type="text" placeholder="Search" name="search" class="input-small"/>
<!--                                    <input type="password" placeholder="Password" name="password" class="input-small"/>-->
                                    <!--<input type="hidden"  name="submit_" class="input-small" size="55px"/>-->
                                    <button class="btn" type="submit">Search</button>
                                </form>
    
</div>

