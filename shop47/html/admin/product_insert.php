<?
	include"../common.php";
	
	$menu=$_REQUEST["menu47"];
	$code=$_REQUEST["code"];
	$name=$_REQUEST["name"];
	$coname=$_REQUEST["coname"];
	$price=$_REQUEST["price"];
	$opt1=$_REQUEST["opt147"];
	$opt2=$_REQUEST["opt247"];
	$contents=$_REQUEST["contents"];
	$status=$_REQUEST["status"];
	$icon_new=$_REQUEST["icon_new"];
	$icon_hit=$_REQUEST["icon_hit"];
	$icon_sale=$_REQUEST["icon_sale"];
	$discount=$_REQUEST["discount"];
	$regday1=$_REQUEST["regday1"];
	$image1=$_REQUEST["image1"];
	$image2=$_REQUEST["image2"];
	$image3=$_REQUEST["image3"];
	$fname1=$_REQUEST["fname1"];
	$fname2=$_REQUEST["fname2"];
	$fname3=$_REQUEST["fname3"];
	
	
	
	if ($_FILES["image1"]["error"]==0) 
	{
		$fname1=$_FILES["image1"]["name"];    
		if (!move_uploaded_file($_FILES["image1"]["tmp_name"],
			  "../product/" . $fname1)) exit("업로드 실패");
	}
	
	if ($_FILES["image2"]["error"]==0) 
	{
		$fname2=$_FILES["image2"]["name"];    
		if (!move_uploaded_file($_FILES["image2"]["tmp_name"],
			  "../product/" . $fname2)) exit("업로드 실패");
	}
	
	if ($_FILES["image3"]["error"]==0) 
	{
		$fname3=$_FILES["image3"]["name"];    
		if (!move_uploaded_file($_FILES["image3"]["tmp_name"],
			  "../product/" . $fname3)) exit("업로드 실패");
	}


	if (!$icon_new)   $icon_new=0;   else   $icon_new=1;
	if (!$icon_hit)   $icon_hit=0;   else   $icon_hit=1;
	if (!$icon_sale)   $icon_sale=0;   else   $icon_sale=1;
   
	
	$query="insert into product (  menu47, code47, name47, coname47, price47, contents47,
	 status47, icon_new47, icon_hit47, icon_sale47, discount47, regday47, image147 )
				values ( '$menu', '$code', '$name', '$coname', '$price', '$contents',
	 '$status', '$icon_new', '$icon_hit', '$icon_sale', '$discount', '$regday1', '$fname1'  );";
	$result=mysqli_query($db,$query);
	if (!$result) exit("에러:$query");
	
?>
	<script>location.href="product.php"</script>
	
	