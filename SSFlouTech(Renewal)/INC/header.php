<?php
@extract($_GET); 
@extract($_POST); 

	$doc_root = $_SERVER['DOCUMENT_ROOT'];
    require_once($doc_root."/INC/get_session.php");
    require_once($doc_root."/INC/dbConn.php");
    require_once($doc_root."/INC/Function.php");
	require_once($doc_root."/INC/arr_data.php");

    require_once($doc_root."/INC/func_other.php");
	require_once($doc_root."/INC/down.php");			//파일 다운로드

$url=$_SERVER["PHP_SELF"];
$file_arr=explode("/",$url);
$file_path=$file_arr[sizeof($file_arr)-1];
$file_path_1=$file_arr[sizeof($file_arr)-2];
//echo "$file_path /";
?>
<!DOCTYPE html>
<html lang="kr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SS FLOUTECH</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    <meta name="description" content="주식회사 에스에스플로텍,에스에스플로텍,테프론,세라믹,SS FLOUTECH,장갑주물제품" >
    <meta name="Author" content="주식회사 에스에스플로텍" />
    <meta name="Keywords" content="주식회사 에스에스플로텍,에스에스플로텍,테프론,세라믹,SS FLOUTECH,장갑주물제품" />
    <meta name="Subject" content="주식회사 에스에스플로텍" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="주식회사 에스에스플로텍" />
    <meta property="og:description" content="주식회사 에스에스플로텍,에스에스플로텍,테프론,세라믹,SS FLOUTECH,장갑주물제품" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="naver-site-verification" content="a177bcd4cfd697ddeef9748038e3eecaf5c11b65"/>
    <link rel="canonical" href="http://ssfloutech.com"/>
    <link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel='stylesheet' type='text/css' href='../css/header.css'>
    <link rel="stylesheet" type="text/css" href="../css/banner.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/about.css" type="text/css">
	<link rel="stylesheet" href="../css/photoview.css" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/link.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/flashWrite.js"></script>
	<!-- <script language="JavaScript" type="text/javascript" src="../js/openlayer.js"></script> -->
	<!-- <script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
	<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.min.js"></script>  
	<script language="JavaScript" type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/slider3.js"></script>
	<script type="text/javascript" src="<?=$PATH_INFO?>/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?=$PATH_INFO?>/js/head.js"></script>
<script src="../js/search.js"></script>
</head>

<body>
<div class="shade"></div>
<div class="sidebar">
	<table class="sidebar-wrap">
		<tbody class="sidebar-content">
			<tr class="sidebar-header">
				<td class="sidebar-button">
					<div class="hamburger" id="hamburger-11">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<table width="100%">
						<tbody>
							<tr class="sidebar-intro">
								<td class="sidebar-content">
									<h1>Introduce.</h1>
									<img src="../img/logo/logo_8.svg"/>
								</td>
							</tr>
							<tr class="sidebar-nav">
								<td class="sidebar-nav-wrap">
									<ul class="sidebar-nav-content">
										<li class="sidebar-nav-element">
											<div class="sidebar-nav-cover"></div>
											<a href="javascript:go_09();">회사소개</a>
										</li>
										<li class="sidebar-nav-element">
											<div class="sidebar-nav-cover"></div>
											<a href="javascript:go_09_01();">제품소개</a>
										</li>
										<li class="sidebar-nav-element">
											<div class="sidebar-nav-cover"></div>
											<a href="javascript:go_10();">설비현황</a>
										</li>
										<li class="sidebar-nav-element">
											<div class="sidebar-nav-cover"></div>
											<a href="javascript:go_09_02();">견적문의</a>
										</li>
									</ul>
								</td>
							</tr>
							<tr class="sidebar-contact">
								<td class="sidebar-content">
									<h1>Contact.</h1>
									<div class="sidebar-contact-address">경기도 남양주시 식송1로 33-1, 1층 101호(별내동)</div>
									<div class="sidebar-contact-tel">TEL. 070-7844-1701~2</div>
									<div class="sidebar-contact-fax">FAX. 031-527-1703</div>
									<div class="sidebar-contact-email">E-mail. the_f10@naver.com</div>
								</td>
							</tr>
						</tbody>
					</table> 
				</td>
			</tr>
		</tbody>
	</table>
</div>
<table id="header" width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td align="center">
	<table class="header-wrap" width="90%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="middle" class="gnb-bg01">
				<a href='/'>
					<span class='header_logo'>
						<img class='header_image' src='/images/logo.svg'>
						<span class='logo_font'>에스에스플로텍</span>
					</span>
				</a>
			</td>
		  	<td align="right" valign="middle" class="header-nav">
				<table class="navi" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><a href='javascript:go_09();'><span id='view_company' class='navi_font'>회사소개</span></a></td>
						<td><a href='javascript:go_09_01();'><span id='view_product' class='navi_font'>제품소개</span></a></td>
						<td><a href='javascript:go_10();'><span id='view_state' class='navi_font'>설비현황</span></a></td>
						<td><a href='javascript:go_09_02();'><span id='view_estimate'class='navi_font'>견적문의</span></a></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </td>
 </tr>
</table>