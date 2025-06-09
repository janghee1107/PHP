<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->
<?
		include "common.php";
		$no=$_REQUEST["no"];
				
		
?>

<html>
<head>
	<title>성적처리 프로그램</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="font.css">
</head>

<script>
	function cal_jumsu()
	{
		form1.hap.value=Number(form1.kor.value) + Number(form1.eng.value) + Number(form1.mat.value);
		form1.avg.value=(form1.hap.value/3.).toFixed(1);
	}
</script>
<body>

<?
	$query="select * from sj where no47=$no;";
	$result=mysqli_query($db,$query);
	if (!$result) exit("에러:$query");
	
	$row=mysqli_fetch_array($result);	
	
	$avg=sprintf("%6.1f",$row["avg47"]);
?>	
<form name="form1" method="post" action="sj_update.php">
<input type="hidden" name="no" value="<?=$no; ?>">


<table width="250"border="1" >

	<tr bgcolor="lightblue">
		<td align="center">이름</td>
		<td align="left">
			<input type="text" name="name" size="5" value="<?=$row["name47"]; ?>">
	</td>	
	</tr>
	<tr bgcolor="lightblue">
		<td align="center">국어</td>
		<td align="left">
			<input type="text" name="kor" size="5" value="<?=$row["kor47"]; ?>"onChange="javascript:cal_jumsu();">
		</td>
	</tr>
	<tr bgcolor="lightblue">
		<td align="center">영어</td>
		<td align="left">
			<input type="text" name="eng" size="5" value="<?=$row["eng47"]; ?>"onChange="javascript:cal_jumsu();">
		</td>
	</tr>
	<tr bgcolor="lightblue">
		<td align="center">수학</td>
		<td align="left">
			<input type="text" name="mat" size="5" value="<?=$row["mat47"]; ?>"onChange="javascript:cal_jumsu();">
		</td>
	</tr>
	<tr bgcolor="lightyellow">
		<td align="center">총점</td>
		<td align="left">
			<input type="text" name="hap" size="5" value="<?=$row["hap47"]; ?>"readonly style="border:0;background-color:#ffffe0">
		</td>
	</tr>
	<tr bgcolor="lightyellow">
		<td align="center">평균</td>
		<td align="left">
			<input type="text" name="avg" size="5" value="<?=$avg; ?>"readonly style="border:0;background-color:#ffffe0">
		</td>
	</tr>
</table>

<br>
<table width="250" border="0">
	<tr>
		<td align="center"> 
			<input type="submit" value="등록"> &nbsp
			<input type="button" value="취소" onclick="javascript:history.back();">
		</td>
	</tr>
</table>
</form>


</body>
</html>
