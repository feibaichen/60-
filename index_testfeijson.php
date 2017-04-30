<?php
require_once('./boxjson.php');

$arr=array(
	'id' =>'1',
	'name' => 'derek',
	array(
		'id' =>'1',
	'name' => 'derek',
	'sex' => 'man',
	'adress' => 'china',
	'tel' => '998888',
		)

	);

Response::json(200,'数据返回成功',$arr); 
  ?>