<?php

global $SDK_VER;
global $UCLOUD_PROXY_SUFFIX;
global $UCLOUD_CUSTOM_DOMAIN;
global $UCLOUD_PUBLIC_KEY;
global $UCLOUD_PRIVATE_KEY;

$SDK_VER = "1.1.0";

//空间域名后缀,请查看控制台上空间域名再配置此处
//https://docs.ucloud.cn/storage_cdn/ufile/tools/introduction
$UCLOUD_PROXY_SUFFIX = '.cn-bj.ufileos.com';      //如果是其他地域的，请参考上面的说明

//可选：使用自定义域名（your-custom-domain.com），置空则继续使用 bucket + suffix
$UCLOUD_CUSTOM_DOMAIN = '';

$UCLOUD_PUBLIC_KEY = 'paste your public key here';
$UCLOUD_PRIVATE_KEY = 'paste your private key here';
