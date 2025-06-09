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
		echo("&nbsp<a href='sj_list.php?page=$tmp&text1=$text1'>
				<img src='images/i_next.gif' align='absmiddle' border='0'>
			</a>");
	}

	echo("</td>
		</tr>
	</table>");
?>
