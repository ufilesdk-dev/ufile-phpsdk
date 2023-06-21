# UCloud 对象存储官方 Php 语言 SDK

[![Software License](https://img.shields.io/github/license/saltstack/salt)](LICENSE)

## US3 (原名UFile) 对象存储基本概念
在对象存储系统中，存储空间（Bucket）是文件（File）的组织管理单位，文件（File）是存储空间的逻辑存储单元。对于每个账号，该账号里存放的每个文件都有唯一的一对存储空间（Bucket）与键（Key）作为标识。我们可以把 Bucket 理解成一类文件的集合，Key 理解成文件名。由于每个 Bucket 需要配置和权限不同，每个账户里面会有多个 Bucket。在 US3 里面，Bucket 主要分为公有和私有两种，公有 Bucket 里面的文件可以对任何人开放，私有 Bucket 需要配置对应访问签名才能访问。  
使用本 SDK 你不需要考虑签名，包装 URL，处理 HTTP response code 等一系列非常繁琐的事情。

## 功能说明
ucloud/conf.php 为配置文件，按需填写：

-    $UCLOUD_PROXY_SUFFIX = '.cn-bj.ufileos.com';
-    $UCLOUD_PUBLIC_KEY = 'paste your public key here';
-    $UCLOUD_PRIVATE_KEY = 'paste your private key here';


Demo 目录中，包含各个接口的使用例子：
-    append.php
-    delete.php
-    get.php
-    multipart.php
-    mupload.php
-    put.php
-    listobjects.php
-    uploadhit.php


## 许可证
[Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)
