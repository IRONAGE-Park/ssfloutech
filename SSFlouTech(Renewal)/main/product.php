<?php
	include "../INC/header.php";
	$conf_tbanner['title'] = '제품소개';
	$conf_tbanner['images'] = 'product.png';
	include "../INC/top_banner.php";
?>
<?
########## �Խ��Ǽ������� #########
if (!$bmain) $bmain="list";

?>
<table class="photolist-content" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" valign="top">
			<table style="max-width: 1374px;" width="95%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<!--contents-->
					<td valign="top" class="content">
						<table width="100%" class="product-search" align="center" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="product-search-wrapper">
									<input id="product-search" class="product-search-bar" type="text" placeholder="제품검색" />
								</td>
								<td align="right" class="product-filter-wrapper">
									<select class="product-filter-bar">
										<option>전체</option>
										<option>카테고리</option>
										<option>카테고리</option>
									</select>
								</td>
							</tr>
						</table>
						<div id="search-result">
						<?
							include "./pro${bmain}.php";
						?>
						</div>
					</td>
					<!--//contents-->
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php include "../INC/footer.php"; ?>