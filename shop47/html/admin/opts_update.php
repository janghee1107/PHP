<?
	include "../common.php";
	
	
	
	$no1=$_REQUEST["no1"];
	$no2=$_REQUEST["no2"];
	$name=$_REQUEST["name"];
	

	
	$query="update opts  set     name47='$name'  where no47 = $no2;";
	
		
	$result=mysqli_query($db,$query);
	if (!$result) exit("에러:$query");
	
	  
?>
	<script>location.href="opts.php?no1=<?=$no1?>"</script>
	
	