<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
		include"common.php";
		$no=$_REQUEST["no"];
		$text1=$_REQUEST["text1"];
		$menu=$_REQUEST["menu"];
		$sort=$_REQUEST["sort"];
		$page=$_REQUEST["page"];
		$size=$_REQUEST["size"];
			$no=$_REQUEST["no47"];
			



?>
<html>
<head>
<title>인덕문고</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link href="include/font.css" rel="stylesheet" type="text/css">
<script language="Javascript" src="include/common.js"></script>
</head>

<body style="margin:0">
<center>

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> 
		<td>
			<!--  상단 왼쪽 로고  -------------------------------------------->
			<table border="0" cellspacing="0" cellpadding="0" width="182">
				<tr>
					<td><a href="index.html"><img src="images/top_logo.gif" width="182" height="30" border="0"></a></td>
				</tr>
			</table>
		</td>
		<td align="right" valign="bottom">
			<!--  상단메뉴 Home/로그인/회원가입/장바구니/주문배송조회/즐겨찾기추가  ---->	
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="index.html"><img src="images/top_menu01.gif" border="0"></a></td>
					<td><img src="images/top_menu_line.gif" width="11"></td>
<?
				if (!$cookie_no)
					echo("<td><a href='member_login.php'><img src='images/top_menu02.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='member_agree.php'><img src='images/top_menu03.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>");
				else
					echo("<td><a href='member_logout.php'><img src='images/top_menu02_1.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='member_edit.php'><img src='images/top_menu03_1.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>");
					
?>					
					
					<td><a href="cart.html"><img src="images/top_menu05.gif" border="0"></a></td>
					<td><img src="images/top_menu_line.gif" width="11"></td>
					<td><a href="jumun_login.html"><img src="images/top_menu06.gif" border="0"></a></td>
					<td><img src="images/top_menu_line.gif"width="11"></td>
					<td><img src="images/top_menu08.gif" onclick="javascript:Add_Site();" style="cursor:hand"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<!--  메인 이미지 --------------------------------------------------->
<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td><a href="index.html"><img src="images/main_image47.jpg" width="959" height="175" border="0"></a></td>
	</tr>
</table>

<!--  Category 메뉴 : 가로형인 경우  --------------------------------------
<table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td align="left" bgcolor="#F7F7F7">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="product.html?no=1"><img src="images/main_menu01_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=2"><img src="images/main_menu02_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=3"><img src="images/main_menu03_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=4"><img src="images/main_menu04_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=5"><img src="images/main_menu05_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=6"><img src="images/main_menu06_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=7"><img src="images/main_menu07_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=8"><img src="images/main_menu08_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=9"><img src="images/main_menu09_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=10"><img src="images/main_menu10_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
------------------------------------------------------------------------>

<!--  상품 검색 ---------------------------------------------------------->
<table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td height="1" colspan="5" bgcolor="#F7F7F7"></td></tr>
	<tr bgcolor="#F0F0F0">
	
	
	<?
		if(!$cookie_no)
		echo("<td width='181' align='center'><font color='#666666'>&nbsp <b>Welcome ! &nbsp;&nbsp  고객님 </b></font></td>");
	else
		echo("<td width='181' align='center'><font color='#666666'>&nbsp <b>Welcome ! &nbsp;&nbsp  $cookie_name 님 </b></font></td>");

	?>
	
		</b></font></td>
		
		<td style="font-size:9pt;color:#666666;font-family:돋움;padding-left:5px;"></td>
		<td align="right" style="font-size:9pt;color:#666666;font-family:돋움;"><b>상품검색 ▶&nbsp</b></td>
		<!-- form1 시작 -->
		<form name="form1" method="post" action="product_search.html">
		<td width="135">
			<input type="text" name="findtext" maxlength="40" size="17" class="cmfont1">
		</td>
		</form>
		<!-- form1 끝 -->
		<td width="65" align="center"><a href="javascript:Search()"><img src="images/i_search1.gif" border="0"></a></td>
	</tr>
	<tr><td height="1" colspan="5" bgcolor="#E5E5E5"></td></tr>
</table>

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td height="10" colspan="2"></td></tr>
	<tr>
		<td height="100%" valign="top">
			<!--  화면 좌측메뉴 시작 ----------------------------------------------->
			
			<table width="181" border="0" cellspacing="0" cellpadding="0">
				<tr> 
					<td valign="top"> 
						<!--  Category 메뉴 : 세로인 경우 -------------------------------->
						<table width="177"  border="5" cellpadding="2" cellspacing="1" bgcolor="black">
							<tr><td height="3"  bgcolor="black"></td></tr>
							<tr><td height="30" bgcolor="#f0f0f0" align="center" style="font-size:12pt;color:#333333"><b>Category</b></td></tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=1">소설</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=2">시</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=3">인문</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=4">요리</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=5">건강</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=6">자기계발</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=7">과학</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=8">IT</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=9">외국어</a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td width='176' height="30" border="0	" align='center' ><a href="product.php?menu=10">잡지</a></td></tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr><td height="10"></td></tr>
				<tr> 
					<td> 
						<!--  Custom Service 메뉴(QA, FAQ...) -->
						<table width="177"  border="0" cellpadding="2" cellspacing="1" bgcolor="#afafaf">
							<tr><td height="3"  bgcolor="#a0a0a0"></td></tr>
							<tr><td height="25" bgcolor="#f0f0f0" align="center" style="font-size:11pt;color:#333333"><b>Customer Service</b></td></tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td><a href="qa.html"><img src="images/main_left_qa.gif" border="0" width="176"></a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td><a href="faq.html"><img src="images/main_left_faq.gif" border="0" width="176"></a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td><a href=""><img src="images/main_left_etc.gif" border="0" width="176"></a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td><a href=""><img src="images/main_left_etc.gif" border="0" width="176"></a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0">
										<tr><td><a href=""><img src="images/main_left_etc.gif" border="0" width="176"></a></td></tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!--  화면 좌측메뉴 끝 ------------------------------------------------->
		</td>
		<td width="10"></td>
		<td valign="top">

<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	

			<!--  현재 페이지 자바스크립  -------------------------------------------->
			<script language = "javascript">

			function Zoomimage(no) 
			{
				window.open("zoomimage.php?no="+no, "", "menubar=no, scrollbars=yes, width=560, height=640, top=30, left=50");
			}

			function check_form2(str) 
			{
				if (!form2.opts1.value) {
						alert("옵션1을 선택하십시요.");
						form2.opts1.focus();
						return;
				}
				if (!form2.opts2.value) {
						alert("옵션2를 선택하십시요.");
						form2.opts2.focus();
						return;
				}
				if (!form2.num.value) {
						alert("수량을 입력하십시요.");
						form2.num.focus();
						return;
				}
				if (str == "D") {
					form2.action = "cart_edit.php";
					form2.kind .value = "order";
					form2.submit();
				}
				else {
					form2.action = "cart_edit.php";
					form2.submit();
				}
			}

			</script>

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
<?
		$query="select * from product where no47=$no;";
			
		$result=mysqli_query($db,$query);
		if (!$result) exit("에러:$query");
		  	  		  
		$row=mysqli_fetch_array($result);
		
?>				
					<td height="30"><img src="images/product_title3.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<!-- form2 시작  -->
			<form name="form2" method="post" action="">
			<input type="hidden" name="no" value="<?=$no;?>">
			<input type="hidden" name="kind" value="insert">

			<table border="0" cellpadding="0" cellspacing="0" width="745">
				<tr>
					<td width="335" align="center" valign="top">
						<!-- 상품이미지 -->
						<table border="0" cellpadding="0" cellspacing="1" width="315" height="315" bgcolor="D4D0C8">
							<tr>
								<td bgcolor="white" align="center">
									<img src="product/<?=$row["image147"]; ?>" height="315" border="0" align="absmiddle" ONCLICK="Zoomimage('0000')" STYLE="cursor:hand">
								</td>
							</tr>
						</table>
					</td>
					<td width="410 " align="center" valign="top">
						<!-- 상품명 -->
						<table border="0" cellpadding="0" cellspacing="0" width="370" class="cmfont">
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<tr>
								<td width="80" height="45" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="666666"><b>제품명</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td style="padding-left:10px">
									<font color="282828"><?=$row["name47"]; ?></font><br>
									
								</td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<!-- 시중가 -->
							<tr>
								<td width="80" height="35" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="666666"><b>소비자가</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td width="289" style="padding-left:10px"><font color="666666"><?=number_format($row["price47"]); ?> 원</font></td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<!-- 판매가 -->
							<tr>
								<td width="80" height="35" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="666666"><b>판매가</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td style="padding-left:10px"><font color="0288DD"><b><?=number_format($row["price47"]); ?> 원</b></font></td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<!-- 옵션 -->
							<tr>
								<td width="80" height="35" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="666666"><b>옵션선택</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td style="padding-left:10px">

								
									<select name="opts1" class="cmfont1">
										<option value="">선택하세요</option>
										<option value="1">연필</option>
										<option value="2">샤프</option>
										<option value="3">볼펜(검정)</option>
										<option value="4">볼펜(빨강)</option>
										<option value="5">볼펜(파랑)</option>
									</select> &nbsp;
									<select name="opts2" class="cmfont1">
										<option value="">선택하세요</option>
										<option value="6">포스트잇(노랑)</option>
										<option value="7">포스트잇(빨강)</option>
										<option value="8">포스트잇(파랑)</option>
									</select>
								</td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<!-- 수량 -->
							<tr>
								<td width="80" height="35" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="666666"><b>수량</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td style="padding-left:10px">
									<input type="text" name="num" value="1" size="3" maxlength="5" class="cmfont1"> <font color="666666">개</font>
								</td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" width="370" class="cmfont">
							<tr>
								<td height="70" align="center">
									<a href="javascript:check_form2('D')"><img src="images/b_order.gif" border="0" align="absmiddle"></a>&nbsp;&nbsp;&nbsp;
									<a href="javascript:check_form2('C')"><img src="images/b_cart.gif"  border="0" align="absmiddle"></a>
								</td>
							</tr>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" width="370" class="cmfont">
							<tr>
								<td height="30" align="center">
									<img src="images/product_text1.gif" border="0" align="absmiddle">
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</form>
			<!-- form2 끝  -->

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="22"></td></tr>
			</table>

			<!-- 상세설명 -->
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746">
				<tr>
					<td height="30" align="center">
						<img src="images/product_title.gif" width="746" height="30" border="0">
					</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746" style="font-size:9pt">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="200" valign=top style="line-height:14pt">
						본제품의 상세설명은 다음과 같습니다.
						<br>
						<br>
						<center>
						<img src="product/<?=$row["image147"]; ?>"><br><br><br>
						
						</center>
					</td>
				</tr>
			</table>

			<!-- 교환배송정보 -->
			<table border="0" cellpadding="0" cellspacing="0" width="746" class="cmfont">
				<tr><td height="10"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746">
				<tr>
					<td align="center" class="cmfont"><?=$row["contents47"];?></td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746" class="cmfont">
				<tr><td height="10"></td></tr>
			</table>


<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	

		</td>
	</tr>
</table>


<!-- 화면 하단 부분 : 회사정보/회사소개/이용정보/개인보호정책 ... ---------------------------->
<br><br>
<table width="959" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr> 
		<td background="images/footer_bg.gif" height="11"></td>
	</tr>
	<tr><td height="5"></td></tr>
	<tr> 
		<td> 
			<table width="959" border="0" cellspacing="0" cellpadding="0">
				<tr> 
					<td valign="top"><a href="index.html"><img src="images/footer_logo.gif" border="0"></a></td>
					<td width="28"></td>
					<td> 
						<table border="0" cellspacing="0" cellpadding="0">
							<tr> 
								<td> 
									<table border="0" cellspacing="0" cellpadding="0">
										<tr> 
											<td><a href="company.html"><img src="images/footer_menu01.gif" border="0"></a></td>
											<td><img src="images/footer_line.gif"></td>
											<td><a href="useinfo.html"><img src="images/footer_menu02.gif" border="0"></a></td>
											<td><img src="images/footer_line.gif"></td>
											<td><a href="policy.html"><img src="images/footer_menu03.gif" border="0"></a></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr> 
								<td><img src="images/footer_copyright.gif"></td>
							</tr>
						</table>
					</td>
					<td align="right" valign="top">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr> 
								<td align="right">
										<a href="index.html"><img src="images/footer_home.gif" border="0"></a>&nbsp
										<a href="#top"><img src="images/footer_top.gif" border="0"></a>
								</td>
							</tr>
							<tr>
								<td>
									<table border="0" cellspacing="0" cellpadding="0">
										<tr> 
											<td><A HREF="http://www.ftc.go.kr/" target="_blank"><img src="images/footer_pic1.gif" border=0></A></td>
											<td><img src="footer_line.gif" width="3" height="42"></td>
											<td><A HREF="http://www.sgic.co.kr/" target="_blank"><img src="images/footer_pic2.gif" border=0></a></td>
										</tr>
									</table>
								</td>
							<tr> 
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
&nbsp
</center>

</body>
</html>