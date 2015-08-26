<?php 
	define("usuario","dbo589044351");
	define("password","fire123");
	define("db","db589044351");
	define("host","db589044351.db.1and1.com");
	
	function con(){
	mysql_connect(host,usuario,password) or die(mysql_error());
	mysql_select_db(db) or die(mysql_error());	
	}
	
	?>