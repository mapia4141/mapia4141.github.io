<?php
  require_once('../_path.php');
  // �α��� ���¸� ���Ǻ����� �����Ѵ� 
  if (isset($_SESSION['uno'])) {
    $_SESSION = array();  // ���� ���� Ŭ���� 
    session_destroy();    // ������ ����
  }
  echo '<script>location=" ' . ROOT_PATH . ' ";</script>';  // ��Ʈ�� �̵� 
?>
