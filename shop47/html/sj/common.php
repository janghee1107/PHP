<?
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	ini_set("display_errors",1);
	
	mysqli_report(MYSQLI_REPORT_OFF);
	
	$db=mysqli_connect("localhost","shop47","1234","shop47");
	if (!$db) exit("DB연결에러");
	
	$page_line =5;
	$page_block=5;
	?>