<?

	include"../common.php";

	$admin_id=$_REQUEST["admin_id"];
	$admin_pw=$_REQUEST["admin_pw"];
	
	
	if ($adminid == $admin_id && $adminpw == $admin_pw)
		{
			setcookie("cookie_admin", "yes");
			echo("<script>location.href='member.php'</script>");
		}
	else
		{
			setcookie("cookie_admin", "");
			echo("<script>location.href='index.html'</script>");
		}
		
?>