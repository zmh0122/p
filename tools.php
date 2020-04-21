<?php
// 数据格式化打印
if (!function_exists('p')) {
	function p($data) {
		echo "<pre>";
		print_r($data);
	}
}
?>
