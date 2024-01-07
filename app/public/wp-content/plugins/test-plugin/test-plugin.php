<?php

/**
 * Plugin Name: test-plugin
 * Plugin URI: https://www.codingmachine.co.kr/
 * Description: 테스트 플러그인.
 * Version: 0.1
 * Author: machine
 * Author URI: https://www.codingmachine.co.kr/
 **/

// 직접 접근 차단
if (!defined('ABSPATH')) exit;


// Add menu page
add_action('admin_menu', 'test_plugin_menu');



function testCodeFunc($attributes)
{
  $default = array(
    'title' => '코딩머신'
  );
  $attr = shortcode_atts($default, $attributes);
  $html = <<<EOF
<div style="padding: 20px; border: 1px solid #999999;">
	{$attr['title']}님 안녕하세요!
</div>
EOF;
  return $html;
}
add_shortcode('testCode', 'testCodeFunc');
