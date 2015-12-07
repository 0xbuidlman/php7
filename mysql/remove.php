<?php
  ////////////////////////////////////////////////////////////
  // 2003-2012 (C) IT-������ SoftTime (http://www.softtime.ru)
  ////////////////////////////////////////////////////////////
  // ���� ��������� DEBUG ����������, �������� ����������
  // �������, � ��������� ��������� ��������� ��������� ��
  // �������������� ���������, ��������� � MySQL � ���
  define("DEBUG", 1);
  // ������ ��������� ������ ��������� ������
  $dblocation = "localhost";
  // ��� ���� ������, �� �������� ��� ��������� ������
  $dbname = "softtimeorg";
  // ��� ������������ ���� ������
  $dbuser = "root";
  // � ��� ������
  $dbpasswd = "";

  // ��������
  $tbl_accounts            = 'softtimeorg_accounts';
  $tbl_accounts_permission = 'softtimeorg_accounts_permission';
  // CMS
  $tbl_catalog             = 'softtimeorg_menu_catalog';
  $tbl_position            = 'softtimeorg_menu_position';
  $tbl_paragraph           = 'softtimeorg_menu_paragraph';
  $tbl_paragraph_image     = 'softtimeorg_menu_paragraph_image';
  // �������
  $tbl_news                = 'softtimeorg_news';
  // �������� �����
  $tbl_guestbook           = 'softtimeorg_guestbook';
  // �����
  $tbl_test_catalog        = 'softtimeorg_test_catalog';
  $tbl_test_question       = 'softtimeorg_test_question';
  // ������ ����
  $tbl_booklist            = 'softtimeorg_booklist';
  // ����������
  $tbl_members             = 'softtimeorg_members';
  // �����������
  $tbl_photo_catalog       = 'softtimeorg_photo_catalog';
  $tbl_photo_position      = 'softtimeorg_photo_position';
  $tbl_photo_settings      = 'softtimeorg_photo_settings';
  // ����
  $tbl_blog_catalogs       = 'softtimeorg_blog_catalogs';
  $tbl_blog_position       = 'softtimeorg_blog_position';
  $tbl_blog_paragraph      = 'softtimeorg_blog_paragraph';
  // ������
  $tbl_citations           = 'softtimeorg_citations';
  // �����
  $tbl_jokes_catalogs      = 'softtimeorg_jokes_catalogs';
  $tbl_jokes_positions     = 'softtimeorg_jokes_positions';
  // �����
  $tbl_authors             = "authors";
  $tbl_posts               = "posts";
  $tbl_themes              = "themes";
  // ������������
  $tbl_users               = 'softtimeorg_consult_users';
  $tbl_request             = 'softtimeorg_consult_request';
  $tbl_users_pay           = 'softtimeorg_consult_users_pay';
  $tbl_users_totalsum      = 'softtimeorg_consult_users_totalsum';
  $tbl_parameter           = 'softtimeorg_consult_parameter';

  if($_SERVER['SERVER_NAME'] != "localhost" &&
     $_SERVER['SERVER_NAME'] != "softtimeorg.dev")
  {
    $dblocation = "localhost";
    $dbname = "softtime_org";
    $dbuser = "softtimeorg";
    $dbpasswd = "MUgfpVUtAl4zCWg";
  }
  ////////////////////////////////////////////////////////////
  // ���� � ����� � ��������
  ////////////////////////////////////////////////////////////
  define("CLASSDIR", "../class/");

  // ������������� ���������� � ����� ������
  $dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
  if (!$dbcnx)
  {
    exit("<P>� ��������� ������ ������ ���� ������ �� ��������, 
          ������� ���������� ����������� �������� ����������.</P>");
  }
  // �������� ���� ������
  if (! @mysql_select_db($dbname,$dbcnx) )
  {
    exit("<P>� ��������� ������ ���� ������ �� ��������, ������� 
          ���������� ����������� �������� ����������.</P>");
  }

  @mysql_query("SET NAMES 'cp1251'");

  if(!function_exists('get_magic_quotes_gpc'))
  {
    function get_magic_quotes_gpc()
    {
      return false;
    }
  }
  // ���������� ������� ����
  @date_default_timezone_set("Europe/Moscow");
?>
