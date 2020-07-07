<?php

require_once("../ucloud/proxy.php");

//存储空间名
$bucket = "your bucket";
//上传至存储空间后的文件名称(请不要和API公私钥混淆)
$key    = "your key";


list($header, $data, $err) = UCloud_Head($bucket, $key);
if ($err) {
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}else{
	echo "code: " . 200 ."\n";
}

print_r($header);
echo "head $bucket/$key success\n";
