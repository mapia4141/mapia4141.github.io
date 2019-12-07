<?php
switch ($current_menu) {
//**** 홈 메뉴 ******************************************************
case '요기보드' ;
$sub1 = '' ;
$side = '' ;
break;
//**** 게시판 메뉴 ******************************************************
case '게시판' ;
$sub1 = MENU_PATH. '/notice.php' ;
$sub2 = MENU_PATH. '/free.php' ;
$side = <<<EOL
<!---- 서브메뉴 (skin/menu_sub.php) -------->
		<div class="list-group">
		  <div class="list-group-item text-center text-white bg-secondary">게 시 판</div>
		  <a href="$sub1" class="list-group-item list-group-item-action">공지사항</a>
		  <a href="$sub2" class="list-group-item list-group-item-action">자유게시판</a>
		</div>
EOL;
break;

//**** 로그인 메뉴 ******************************************************
case '로그인' ;
$sub1 = USER_PATH . '/login.php' ;
$sub2 = USER_PATH . '/signup.php' ;
$side = <<<EOL
<!---- 서브메뉴 (skin/menu_sub.php) -------->
		<div class="list-group">
		  <div class="list-group-item text-center text-white bg-secondary">로 그 인</div>
		  <a href="$sub1" class="list-group-item list-group-item-action">로그인</a>
		  <a href="$sub2" class="list-group-item list-group-item-action">회원가입</a>
		</div>

EOL;
break;

//**** 정보변경 메뉴 ****************************************************
case '정보변경' ;
$sub1 = USER_PATH . '/profile_edit.php';
$sub2 = USER_PATH . '/pw_change.php';
$side = <<<EOL
<!---- 사이드메뉴 (skin/menu_sub.php) -------->
		<div class="list-group">
		  <div class="list-group-item text-center text-white bg-secondary">정보변경</div>
		  <a href="$sub1" class="list-group-item list-group-item-action">회원정보변경</a>
		  <a href="$sub2" class="list-group-item list-group-item-action">비밀번호변경</a>
		</div>

EOL;
break;
//**** 관리자 메뉴 ****************************************************
case '관리자' ;
$sub1 = USER_PATH . '/admin.php';
$side = <<<EOL
<!---- 사이드메뉴 (skin/menu_sub.php) -------->
		<div class="list-group">
		  <div class="list-group-item text-center text-white bg-secondary">관리자메뉴</div>
		  <a href="$sub1" class="list-group-item list-group-item-action">가입회원정보</a>
		</div>

EOL;
break;
//**** 값이 잘못되었을때 **************************************************
default ;
$side = '$current_menu 변수값을 지정하고 require_once()를 호출 하세요.' ;
} // End switch

return $side ;
?>
<!---- 사이드메뉴 종료(skin/menu_sub.php) -------->
