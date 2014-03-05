<?php
	session_start();
    $dbusername="justincano";
    $dbpassword="nest2013";
    $database="senior_design";
     mysql_connect('nest.justincano.com',$dbusername,$dbpassword);
    @mysql_select_db($database) or die( "Unable to select database");
 ?>