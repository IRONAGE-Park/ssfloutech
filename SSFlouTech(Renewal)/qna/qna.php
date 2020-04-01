<?php
	include "../INC/header.php";
	$conf_tbanner['title'] = '견적문의';
	$conf_tbanner['images'] = 'qna.png';
	include "../INC/top_banner.php";
?>
<?
########## 게시판설정파일 #########
if (!$bmain) $bmain="list";
include "../admin/conf/conf_board.php";
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 	<tr>
  		<td align="center" valign="top">
			<table style="max-width: 1374px;" width="95%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<!--contents-->
					<td valign="top" class="content"><table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td class="border-n">
							<? 
								if(($bmain=="view") or ($bmain=="modify")){
									$row_board = get_tb_board($uid,$tablename); //func_other.php 에서 호출 해서 게시판 정보 가지고 온다 
									if(($row_board['keytype']=="Y") and (($S_USER_ID!=$row_board['pass']) or ($S_USER_NUM!=$uid) or ($S_USER_TABLE!=$tablename) ) AND  ($SITE_ADMIN_UID!=$row_board['pass']) ) { 
										include "../Bboard/boardlogin.php";
									} else { 
										include "../Bboard/board${bmain}.php";
									}
								} else {
									include "../Bboard/board${bmain}.php";

								}
							?>
							</td>
						</tr>
					</td>
				</tr>
  			</table>
		</td>
 	</tr>
</table>
<?php include "../INC/footer.php"; ?>