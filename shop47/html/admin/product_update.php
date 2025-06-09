<?
	include "../common.php";
	
	
	
	$no=$_REQUEST["no"];
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

	if (!$icon_new)   $icon_new=0;   else   $icon_new=1;
	if (!$icon_hit)   $icon_hit=0;   else   $icon_hit=1;
	if (!$icon_sale)   $icon_sale=0;   else   $icon_sale=1;
	
	

	
		$query="update product set menu47='$menu', code47='$code', name47='$name', coname47='$coname', price47='$price', opt147='$opt1', opt247='$opt2', 
		contents47='$contents', status47='$status', icon_new47='$icon_new', icon_hit47='$icon_hit', icon_sale47='$icon_sale', 
		discount47='$discount', regday47='$regday1' where no47=$no;";
	
		
	$result=mysqli_query($db,$query);
	if (!$result) exit("에러:$query");
	
	  

	echo("<script>location.href='product.php'</script>");
	
	?>