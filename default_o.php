<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $site_meta; ?>

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title><?php echo $site_title; ?> - <?php echo $page_title; ?></title>
<?php foreach ( $css as $value )
{
?>
<link rel="stylesheet" type="text/css" href="<?php echo $value; ?>" media="all" />
<?php
}
?>

<!--<script type="text/javascript" src="/js/config/common.js"></script>-->
<?php foreach ( $js as $value )
{
?>
<script type="text/javascript" src="<?php echo $value; ?>"></script>
<?php
}
?>
<script><?php echo $script; ?></script>

</head>
<body>
<!-- header 영역-->
<a name="top">
</a>
<header class="header_class">
	<div class="main_header_box">
		<div class="main_top">
		    
		    <div class="main_top_lbox">
		        <li class="gybox"><a href="/mksystem/lesson/university-admissions">입시반</a></li>
		        <li class="gybox"><a href="/mksystem/lesson/audition">오디션반</a></li>
		        <li class="gybox"><a href="/mksystem/lesson/high-school-admissions">예고입시반</a></li>
		         <li class="gybox"><a href="/mksystem/lesson/hobby">취미반</a></li>
		         <li class="gybox"><a href="/mksystem/lesson/lyrics">프로작사전공</a></li>
		         <li class="gybox"><a href="/mksystem/lesson/plan-management">기획매니지먼트전공</a></li>
		    </div>
		    
		    
		    
		    
			<ul>
<?php
if ( IS_LOGIN )
{
?>
				<li><a href="<?php echo WEB_PATH; ?>member/modify">정보수정</a></li>
				<li><a href="<?php echo WEB_PATH; ?>member/logout">로그아웃</a></li>
<?php
}
else
{
?>
				<li><a href="<?php echo WEB_PATH; ?>member/login">로그인</a></li>
				<li><a href="<?php echo WEB_PATH; ?>member/join">회원가입</a></li>
<?php
}
?>
				<li class="redbox"><a href="<?php echo WEB_PATH; ?>ask/intro">수강문의</a></li>
				<li class="graybox"><a href="<?php echo WEB_PATH; ?>temp/temp04/">사이트맵</a></li>
			</ul>
		</div>
	</div>
<nav>
    <div class="main_nav_box">
        <div class="main_snb_bg"></div>
        <div class="main_menu_box">
            
            <div class="miracle "><a href="/miracle/view/latest"><img src="<?php echo FRONT_IMG_PATH; ?>main/mi_2.gif"  width="76"  alt="버스"/></a></div>
            
            
            <h1 class="main_logo"><a href="/"><img src="<?php echo FRONT_IMG_PATH; ?>main/main_header_logo.jpg"  alt="메인헤드로고"/></a></h1>
            
            
            
            <?php echo $gnb; ?>
            
            
            
        </div>
    </div>
</nav>


</header>


<div class="quick_banner"> 
    <ul>
        <li><a href="/community/contents/video?category=10"><img src="<?php echo FRONT_IMG_PATH; ?>main/movie.png"  alt="모던k동영상"/></a></li>
    </ul>
    
</div>




<div style="height:0px;"></div>

<!-- 메인메뉴 영역-->


<?php
if ( SUB_TITLE )
{
?>
<!-- 서브비주얼  영역-->
<div style="width:100%; height:141px; background:url(<?php echo SUB_VISUAL; ?>) no-repeat center; "></div>

<!-- 서브페이지 영역-->
<div class="subpage_big_box ">

	<!-- 서브메뉴 영역-->
	<?php echo $snb; ?>

	<!-- 서브본문 영역 -->
	<section>
		<div class="subcontent_box">
			<ul class="subcontent_title">
				<li>
					<h2><em></em><?php echo SUB_TITLE; ?></h2>
					<span>home > <?php echo LOCATION; ?></b></span>
				</li>
			</ul>
<?php
}
?>
			<?php echo $contents; ?>
<?php
if ( SUB_TITLE )
{
?>
		</div>
	</section>

</div>
<?php
}
?>


<!-- footer 영역-->
<footer>

	<div class="footer_box">
		<div class="footer_sbox">
			<ul class="fbox_a">
				<li>Info</li>
				<li>수원캠퍼스 경기도 수원시 팔달구 매산로 124번길 (교동,2층)<span>교육청인가 사업등록번호 124-92-97989</span></li>
				<li>분당캠퍼스 경기도 성남시 분당구 야탑로 65번길 8 (나인투빌딩5층)<span>교육청인가 사업등록번호 129-92-35805</span></li>
				<li>영통캠퍼스 경기도 수원시 영통구 봉영로 1623번길 (드림피아빌딩, 3층)<span>교육청인가 사업등록번호 135-91-65632</span></li>
				<li>서울캠퍼스 서울시 서초구 동작대로 24번길 (방배동, 3층)<span>교육청인가 사업등록번호 114-86-88973</span></li>
				<li>COPYRIGHT© 2014 MODERNKMUSICACADEMY. ALL RIGHTS RESERVED.</li>
				<li style="font-size:11px;color:#525252"><a target="_blank" href="/temp/temp03/">Tuition</a></li>
			</ul>

			<ul class="fbox_b">
				<li>ModernK</li>
				<li><a target="_blank" href="https://www.facebook.com/modernKmusic"><img src="<?php echo FRONT_IMG_PATH ?>main/main_icon_facebook.jpg" alt="페이스북 아이콘" /></a></li>
				<li><a target="_blank" href="https://www.instagram.com/modernk_the_leaders/"><img src="<?php echo FRONT_IMG_PATH ?>main/main_icon_blog.png" alt="인스타그램 아이콘" /></a></li>
				<li><a target="_blank" href="http://www.youtube.com/channel/UCPbWI-Vu_BlQg7thRqvkmiw"><img src="<?php echo FRONT_IMG_PATH ?>main/main_icon_youtube.jpg" alt="유투브 아이콘" /></a></li>
				<li><a target="_blank" href="http://tvcast.naver.com/isee0304"><img src="<?php echo FRONT_IMG_PATH ?>main/main_icon_navertv.jpg" alt="네이버tv캐스트 아이콘" /></a></li>

				<li style="clear:both;margin-top:10px; "><input type="button" value="프랜차이즈" style="width:100px; height:30px;background-color:#ffcc00;color:#000;border:0px;font-weight:bold;" onClick="window.open('about:blank').location.href='http://modernk.cloudun.kr/franchise/'"  > </li>
			</ul>

<?php
if ( IS_STAFF )
{
?>
			<ul class="fbox_c">
				<li>ModernK Family</li>
				<li>
					<select onChange="if(this.value)window.open(this.value);" name="fSite" style="border:1px solid #d5d5d5; width:200px; height:27px; padding:0; font:12px; color:#666;">
						<option selected="selected" value="">Family site</option>
						<option value='http://modernm.hakwon.in/index.php'>수원캠퍼스</option>
						<option value='http://modernk.hakwon.in/'>서울캠퍼스</option>
						<option value='http://modernbd.hakwon.in/'>분당캠퍼스</option>
						<option value='http://modernmusic.hakwon.in/'>영통캠퍼스</option>
						<option value='<?php echo WEB_PATH; ?>admin/auth/login'>어드민페이지</option>
					</select>
				</li>
			</ul>
<?php
}
?>
		</div>
	</div>

    
<div class="top_btn"><a href="#top"><img src="<?php echo FRONT_IMG_PATH; ?>main/btn_top.png"  width="50" height="50" alt="메인헤드로고"/></a></div>

</footer>
<!-- adinsight 공통스크립트 start -->
<script type="text/javascript">
var TRS_AIDX = 2978;
var TRS_PROTOCOL = document.location.protocol;
document.writeln();
var TRS_URL = TRS_PROTOCOL + '//' + ((TRS_PROTOCOL=='https:')?'analysis.adinsight.co.kr':'adlog.adinsight.co.kr') +  '/emnet/trs_esc.js';
document.writeln("<scr"+"ipt language='javascript' src='" + TRS_URL + "'></scr"+"ipt>");
</script>
<!-- adinsight 공통스크립트 end -->
</body>
</html>