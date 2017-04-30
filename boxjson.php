<?php
class response
{
	/*
	按照json方式输出通信信息
	@param integer $code ／ @para string $message ／ @para arry $data数据
	return string
	*/
	public static function json($code,$message='',$data=array())
	{
		if(!is_numeric($code)){
			return '';
		}
		$result=array(
		'code' => $code,
		'message' => $message,
		'data' => $data

			);
		echo json_encode($result);
		exit;
	}
}
  ?>
  