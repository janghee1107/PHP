<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->
<?
		include "../common.php";
		
		$text1=$_REQUEST["text1"];
		$sel1=$_REQUEST["sel1"];
		
	
		
		$query="select * from product order by menu47;";
		
			
		$result=mysqli_query($db,$query);
		if (!$result) exit("에러:$query");
		  	  		  
		$count=mysqli_num_rows($result);
?>	
<html>
<head>
<title>쇼핑몰 관리자 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body style="margin:0">

<form name="form1" method="post" action="product_insert.php" enctype="multipart/form-data">

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>

<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr height="23"> 
		<td width="100" bgcolor="#CCCCCC" align="center">상품분류</td>
		<td width="700" bgcolor="#F2F2F2">
<?
		echo("<select name='menu47'>");
		for($i=1;$i<$n_menu;$i++)
		{
			$row=mysqli_fetch_array($result);
			
			   echo("<option value='$i' >$a_menu[$i]</option>");
			
		}
		echo("</select>");
?>			
			
		</td>
	</tr>
	<tr height="23"> 
		<td width="100" bgcolor="#CCCCCC" align="center">상품코드</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text" name="code" value="" size="20" maxlength="20">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">상품명</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text" name="name" value="" size="60" maxlength="60">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">제조사</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text" name="coname" value="" size="30" maxlength="30">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">판매가</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text" name="price" value="" size="12" maxlength="12"> 원
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">옵션</td>
    <td width="700" bgcolor="#F2F2F2">
<?
		$query="select * from opt order by name47;";
			
		$result=mysqli_query($db,$query);
		if (!$result) exit("에러:$query");
		  	  		  
		$count=mysqli_num_rows($result);
		
		echo("<select name='opt147'>");
		for($i=0;$i<$count ;$i++)
		{
			$row=mysqli_fetch_array($result);
			
			   echo("<option value='$row[no47]'>$row[name47]</option>");
		}
		echo("</select>");
?> 
&nbsp; &nbsp;
<?
		$query="select * from opt order by name47;";
			
		$result=mysqli_query($db,$query);
		if (!$result) exit("에러:$query");
		  	  		  
		$count=mysqli_num_rows($result);
		
		echo("<select name='opt247'>");
		for($i=0;$i<$count ;$i++)
		{
			$row=mysqli_fetch_array($result);
			
			   echo("<option value='$row[no47]'>$row[name47]</option>");
		}
		echo("</select>");
?>

			
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">제품설명</td>
		<td width="700" bgcolor="#F2F2F2">
			<textarea name="contents" rows="10" cols="80"></textarea>
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">상품상태</td>
    <td width="700" bgcolor="#F2F2F2">
			<input type="radio" name="status" value="1" checked> 판매중
			<input type="radio" name="status" value="2"> 판매중지
			<input type="radio" name="status" value="3"> 품절
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">아이콘</td>
		<td width="700" bgcolor="#F2F2F2">

			<input type="checkbox" name="icon_new" value="1"> New &nbsp;&nbsp	
			<input type="checkbox" name="icon_hit" value="1"> Hit &nbsp;&nbsp	
			<input type="checkbox" name="icon_sale" value="1"> Sale &nbsp;&nbsp
<?
			if (!$icon_new)   $icon_new=0;   else   $icon_new=1;
			if (!$icon_hit)   $icon_hit=0;   else   $icon_hit=1;
			if (!$icon_sale)   $icon_sale=0;   else   $icon_sale=1;
				
?>
			할인율 : <input type="text" name="discount" value="0" size="3" maxlength="3"> %
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">등록일</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text"  name="regday1" value="<?=$today = date("Y-m-d"); ?> " size="7" maxlength="20">  &nbsp
			
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">이미지</td>
		<td width="700" bgcolor="#F2F2F2">
			<b>이미지1_보이는 이미지</b>: <input type="file" name="image1" size="30" value="찾아보기"><br>
			<b>이미지2_큰 이미지</b>: <input type="file" name="image2" size="30" value="찾아보기"><br>
			<b>이미지3_설명 이미지</b>: <input type="file" name="image3" size="30" value="찾아보기"><br>
		</td>
	</tr>
</table>

<table width="800" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="submit" value="등록하기"> &nbsp;&nbsp
			<input type="button" value="이전화면" onClick="javascript:history.back();">
		</td>
	</tr>
</table>

</form>

</center>

</body>
</html>
