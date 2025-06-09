<!---------------------------------------------------------------------------------------------
	제목 : PHP 쇼핑몰 실무 (실습용 디자인 HTML)

	소속 : 인덕대학교 컴퓨터소프트웨어학과
	이름 : 교수 윤형태 (2022.02)
---------------------------------------------------------------------------------------------->
<?
	include "common.php";
	$text1=$_REQUEST["text1"];
	
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

<table width="400"border="0" >
	<form name="form1" method="post" action="sj_list.php">
	<tr>
		<td width="300">
			이름 : <input type="text" name="text1" size="9" value="<?=$text1?>">
			<input type="button" value="검색" onClick="javascript:form1.submit();">
		</td>	
		<td align="right" ><a href="sj_new.html">입력</a></td>
	</tr>
	</form>
</table>	

<table width="400" border="1" >
	<tr bgcolor="lightblue">
		<td  align="center">이름</td>
		<td  align="center">국어</td>
		<td  align="center">영어</td>
		<td  align="center">수학</td>
		<td  align="center">총점</td>
		<td  align="center">평균</td>
		<td  align="center">삭제</td>
	</tr>
	
	<?
		if (!$text1)
			$query="select * from sj order by name47;";
		else
			$query="select * from sj where name47 like '%$text1%'order by name47;";
		$result=mysqli_query($db,$query);
		if (!$result) exit("에러:$query");
		
		$count=mysqli_num_rows($result);
		
		
		
		$page=$_REQUEST["page"];
		if (!$page) $page=1;
		$pages=ceil($count/$page_line);
		
		$first=1;
		if ($count>0) $first=$page_line*($page-1);
		
		$page_last=$count - $first;
		if($page_last>$page_line)$page_last=$page_line;
		
		if($count>0) mysqli_data_seek($result,$first);
		
		for($i=0; $i<$page_last; $i++)
		{
			$row=mysqli_fetch_array($result);
			$avg=sprintf("%6.1f",$row["avg47"]);
			echo("	<tr bgcolor='lightyellow'>
							<td align='center'> 
								<a href='sj_edit.php?no=$row[no47]'>$row[name47]</a>
							</td>
							<td align='center'>$row[kor47]</td>
							<td align='center'>$row[eng47]</td>
							<td align='center'>$row[mat47]</td>
							<td align='center'>$row[hap47]</td>
							<td align='center'>$avg  </td>
							<td align='center'>
								<a href='sj_delete.php?no=$row[no47]'
									onClick='javascript:return confirm(\"삭제할까요?\");'>
									삭제
								</a>
							</td>	
						</tr>");
		}
		
	?>
<?
	$blocks = ceil($pages/$page_block);		// 전체 블록수
	$block= ceil($page/$page_block);			// 현재 블록
	$page_s = $page_block * ($block-1);	// 현재 페이지
	$page_e = $page_block * $block;			// 마지막 페이지
	if($blocks <= $block) $page_e = $pages;
	
	echo("<table width='400' border='0'>
		<tr>
			<td height='20' align='center'>");

	if ($block > 1) 		// 이전 블록으로
	{
		$tmp = $page_s;
		echo("<a href='sj_list.php?page=$tmp&text1=$text1'>
				<img src='images/i_prev.gif' align='absmiddle' border='0'>
			</a>&nbsp");
	}
	
	for($i=$page_s+1; $i<=$page_e; $i++) 	// 현재 블록의 페이지
	{
		if ($page == $i)
			echo("<font color='red'><b>$i</b></font>&nbsp");
		else
			echo("<a href='sj_list.php?page=$i&text1=$text1'>[$i]</a>&nbsp;");
	}
	
	if ($block < $blocks)		// 다음 블록으로
	{
		$tmp = $page_e+1;
		echo("&nbsp<a href='sj_list.php?page=$i&text1=$text1'>[$i]
				<img src='images/i_next.gif' align='absmiddle' border='0'>
			</a>");
	}

	echo("</td>
		</tr>
	</table>");
?>



</body>
</html>
