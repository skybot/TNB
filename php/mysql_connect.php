<?php

   $mysqlhost="localhost";
   $mysqluser="username";
   $mysqlpasswd="password";
   $mysqldbname="db_name";
   $mysqltable="USERS";
   $mysqlpwd="USER_PASSWORD";
   $mysqlname="USER_NAME";

   $link = @mysql_pconnect($mysqlhost, $mysqluser, $mysqlpasswd);
   if ($link == FALSE) {
     echo "<p><b>Leider kann keine Verbindung zur Datenbank hergestellt werden.";
     echo "Bitte versuchen Sie es später noch einmal.</b></p>\n";
     exit();
   }
   mysql_select_db($mysqldbname);

?>