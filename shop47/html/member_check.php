<?
	include"common.php";
	
	
	$uid=$_REQUEST["uid"];
	$pwd=$_REQUEST["pwd"];
	
	$no=$_REQUEST["no"];
	$name=$_REQUEST["name"];
	
	$query="select no47, name47 from member where uid47='$uid' and pwd47='$pwd' ;";
	
	$result=mysqli_query($db,$query);
	  if (!$result) exit("에러:$query");
	  
	  $row=mysqli_fetch_array($result);
	  
	  $count=mysqli_num_rows($result);
	  
	  if($count>0){
		  setcookie("cookie_no",$row["no47"]);
		  setcookie("cookie_name",$row["name47"]);
		
	  echo("<script>location.href='main.php'</script>");}
	  
	  else
		echo("<script>location.href='member_login.php'</script>");  
?>