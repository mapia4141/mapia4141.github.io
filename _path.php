<?php
    //==== DB 접속정보 ============================
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'autoset');
    define('DB_NAME', 'bbs');
    //==== html(src, href..)에서 사용하는 링크폴더 위치 ===
    define('ROOT_PATH', '/');
    define('CSS_PATH' , '/css');
    define('SKIN_PATH', '/skin');
    define('USER_PATH', '/user');
    define('MENU_PATH', '/menu');
    //==== require,include 에 사용하는 절대경로 ========
    $root = $_SERVER['DOCUMENT_ROOT'] ;
    define('ROOT_DIR' , $root);
    define('YOGI_DIR' , $root . '/yogi');
    define('SKIN_DIR' , $root . '/skin');
    define('USER_DIR' , $root . '/user');
    //==== 요기보드 버전 ============================
    define('YOGI', 'y1');
    //==== 세션 시작 안했으면 세션시작 ====================
    if(!isset($_SESSION)) { 
        session_start(); 
    }
?>
