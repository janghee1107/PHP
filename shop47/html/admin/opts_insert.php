<?
	include"../common.php";
	
	$name=$_REQUEST["name"];
	$no1=$_REQUEST["no1"];
	
	
	
   
	
	$query="insert into opts (opt_no47, name47)
				values ('$no1', '$name');";
	$result=mysqli_query($db,$query);
	if (!$result) exit("에러:$query");
	
?>
	<script>location.href="opts.php?no1=<?=$no1?>"</script>
	
	