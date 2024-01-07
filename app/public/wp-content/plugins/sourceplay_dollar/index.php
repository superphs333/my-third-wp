<?php

/**
 * Plugin Name: sourceplay-naermap
 * Description: 현 시점의 달라 환율에 맞춰 상품 가격을 원화로 산출합니다.
 * Version: 0.0.1
 * Author: devL
 * Text Domain: sourceplay_dollar
 * Author URI : htts://zooo.kr/fxbbs/naver_map_plugin.php
 */

register_activation_hook(__FILE__, 'source_playground_dollar_activation');
/* 활성화 시에 실행 */
function source_playground_dollar_activation()
{

  //설치 작업을 준비
  //필요한 테이블 mysql table를 생성
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $wpdb->query("CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}sourceplay_dollar` (
    `d_code` INT(11) NOT NULL AUTO_INCREMENT,
    `won_for_1_dollar` VARCHAR(50) NOT NULL,
    `insert_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`d_code`)
  ) {$charset_collate};");
}



register_deactivation_hook(__FILE__, 'source_playground_dollar_deactivation');
function source_playground_dollar_deactivation()
{
  // 캐시를 없애주거나 옵션 정보들을 삭제하게 됨
}

register_uninstall_hook(__FILE__, 'source_playground_dollar_uninstall');
function source_playground_dollar_uninstall()
{
  // global $wpdb;
  // $wpdb->query("DROP TABLE '{$wpdb->prefix}테이블명칭'");
}

// 관리자 메뉴
add_action('admin_menu', 'source_playground_dollar_menu_setting');
function source_playground_dollar_menu_setting()
{
  global $_wp_last_object_menu;
  add_menu_page(__('달러환율산출(소스놀이터)', 'source-playground-dollar'), '달러환율산출', 'manage_options', 'source_playground_dollar_index', 'source_playground_dollar_index', 'dashicons-clock', $_wp_last_object_menu);
}

// 워드프레스 초기화 될 때 
add_action('init', 'source_playground_dollar_receive_rate');
function source_playground_dollar_receive_rate()
{

  if ($_GET["GET_DOLLAR"] == "OK") {
    // Use an API to get the dollar exchange rate
    $apiUrl = "https://api.exchangeratesapi.io/latest?base=USD&symbols=KRW"; // Example API endpoint
    $won_for_1_dollar = 1253;
    echo $won_for_1_dollar;
  }
}

// 달러환율산출이라는 메뉴를 클릭했을 때 실행 됨
function source_playground_dollar_index()
{
  include "dollar_rate.php";
}

function getContents($webpage) //페이지에서 내용 가져오기
{
  $ch = curl_init($webpage);

  curl_setopt($ch, CURLOPT_FAILONERROR, true);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko');
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
  curl_setopt($ch, CURLOPT_TIMEOUT, 400);
  $webcontents = curl_exec($ch);
  curl_close($ch);
  return $webcontents;
}

function findStringBetweenAnB($dest, $A, $B)
{
  $firstFindIdx = strpos($dest, $A);
  $firstFindIdx = $firstFindIdx + strlen($A);
  $secondFindIdx = strpos($dest, $B, $firstFindIdx);
  $finalSearString = trim(substr($dest, $firstFindIdx, $secondFindIdx - $firstFindIdx));
  return $finalSearString;
}
