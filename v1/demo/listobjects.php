<?php

require_once("../ucloud/proxy.php");

//存储空间名
$bucket = "your bucket";

//需要拉列表的目录前缀
$prefix    = "path prefix";

//拉列表一般分页拉取，每次拉取会返回一个marker，用来作为下一次拉取的marker，实现翻页拉取，初始为""
//如果拉取到结尾："IsTruncated":false,"NextMarker":""
$marker = "";

#默认分隔符，目前支持/ 和空字符；如果是空表示不区分目录递归返回列表；
$delimiter ="/";

//该接口拉取一个目录前缀下的目录、文件列表
list($data, $err) = UCloud_ListObjects($bucket, $prefix, $marker, 100, $delimiter);
if ($err) {
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}

echo json_encode($data, 128);
