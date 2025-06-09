<?
	include"common.php";
	
	$cookie_no=$_COOKIE["cookie_no"];
	$cookie_name=$_COOKIE["cookie_name"];
	
	$no=$_REQUEST["no"];
	$uid=$_REQUEST["uid"];
	$pwd=$_REQUEST["pwd"];
	$pwd1=$_REQUEST["pwd1"];
	$name=$_REQUEST["name"];
	$birthday1=$_REQUEST["birthday1"];
	$birthday2=$_REQUEST["birthday2"];
	$birthday3=$_REQUEST["birthday3"];
	$sm=$_REQUEST["sm"];
	$tel1=$_REQUEST["tel1"];
	$tel2=$_REQUEST["tel2"];
	$tel3=$_REQUEST["tel3"];
	$phone1=$_REQUEST["phone1"];
	$phone2=$_REQUEST["phone2"];
	$phone3=$_REQUEST["phone3"];
	$email=$_REQUEST["email"];
	$zip=$_REQUEST["zip"];
	$juso=$_REQUEST["juso"];
	$gubun=$_REQUEST["gubun"];

	
	
	$birthday=sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);
    $tel=sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
	$phone=sprintf("%-3s%-4s%-4s", $phone1, $phone2, $phone3);

	
	if (!$pwd1)
		$query="update member  set   name47='$name', birthday47='$birthday', sm47=$sm, tel47='$tel', 
		phone47='$phone',  email47='$email',  zip47='$zip', juso47='$juso' where no47 = $cookie_no;";
	else
		$query="update member set   pwd47='$pwd1', name47='$name', birthday47='$birthday', sm47=$sm, tel47='$tel', 
		phone47='$phone',  email47='$email',  zip47='$zip', juso47='$juso' where no47 = $cookie_no;";
		
	$result=mysqli_query($db,$query);
	if (!$result) exit("에러:$query");
	
	  

	echo("<script>location.href='main.php'</script>");
	
	?>