<?
	include "main_top.php";
	$no=$_REQUEST["no"];
	
	$query="select * from product where icon_new47=1 and status47=1 order by rand() limit 15";
	$result=mysqli_query($db,$query); 
		 if (!$result) exit("에러:$query");
		 $count=mysqli_num_rows($result);    // 레코드개수
?>

<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	

			<!---- 화면 우측(신상품) 시작 -------------------------------------------------->	
			<table width="767" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td height="60">
						<img src="images/main_newproduct.jpg" width="767" height="40">
					</td>
				</tr>
			</table>
<?
			
			$num_col=5;   $num_row=3;                   // column수, row수
			$count=mysqli_num_rows($result);         // 출력할 제품 개수
			$icount=0;                                                // 출력한 제품 개수 카운터
			echo("<table border='0' cellpadding='0' cellspacing='0'>");
			for ($ir=0; $ir<$num_row; $ir++)
			{
				 echo("<tr>");
				 for ($ic=0;  $ic<$num_col;  $ic++)
				{
					 if ($icount < $count)
					{
					
						 $row=mysqli_fetch_array($result);
						 $q=number_format($row["price47"]);
						 $icon_hit= $_REQUEST["icon_hit"];
						 $icon_new= $_REQUEST["icon_new"];	
						 $icon_sale= $_REQUEST["icon_sale"];
						 $discount= $_REQUEST["discount"];
						 $image1=$_REQUEST["image1"];
						 $image2=$_REQUEST["image2"];
						 $image3=$_REQUEST["image3"];
					   	$fname1=$_REQUEST["fname1"];
					 	$fname2=$_REQUEST["fname2"];
						$fname3=$_REQUEST["fname3"];
						 
						 echo("<td width='150' height='205' align='center' valign='top'>
						<table border='0' cellpadding='0' cellspacing='0' width='100' class='cmfont'>
							<tr> 
								<td align='center'> 
									<a href='product_detail.php?no47=$row[no47]'><img src='product/$row[image147]' width='120' height='140' border='0'></a>
								</td>
							</tr>
							<tr><td height='5'></td></tr>
							<tr> 
								<td height='20' align='center'>
									<a href='product_detail.php?no47=$row[no47]'><font color='444444'>$row[name47]</font></a>&nbsp; ");
									
									if ($row["icon_hit47"] == 1) { echo ("<img src='images/i_hit.gif' align='absmiddle' vspace='1'>");	} 
									if ($row["icon_new47"] == 1) { echo ("<img src='images/i_new.gif' align='absmiddle' vspace='1'>");	} 
									if ($row["icon_sale47"] == 1) { echo ("<img src='images/i_sale.gif' align='absmiddle' vspace='1'> <font color='red'>$row[discount47]%</font>");	} 
									echo(" 
								</td>
							</tr>");
							
							$e=number_format( round($row["price47"]*(100-$row["discount47"])/100, -3));
									if ($row["icon_sale47"] == 1) { echo ("<tr><td height='20' align='center'><strike>$row[price47] 원</strike><br><b>$e 원</b></td></tr>");	} 
									else { echo ("<tr><td height='20' align='center'><b>$q 원</b></td></tr>");}
						echo("</table>
						</td>");
					}
					 else
						 echo("<td></td>");      // 제품 없는 경우
					 $icount++;
				 }
				echo("</tr>");
			}
			echo("</table>");

?>
			<table border="0" cellpadding="0" cellspacing="0">
				<!---1번째 줄-->
				
				<tr><td height="10"></td></tr>
			</table>

			<!---- 화면 우측(신상품) 끝 -------------------------------------------------->	

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	

<?
	include "main_bottom.php";
?>		
		