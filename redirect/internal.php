<?php ## ���������� �������� (������ � CGI-������ PHP!)
  // ������� ��������� ���������� ��������.
  header("Status: 200 OK");
  // �������� URI-���������� �������� �������.
  $dir = dirname($_SERVER['SCRIPT_NAME']);
  if ($dir == '\\') $dir = '';
  // ������������ ������������� �� ����������� (!) URI.  
  header("Location: $dir/result.php");
  exit();