<?php
use think\facade\Db;
require '../vendor/autoload.php';
$config = require '../src/config/database.php';

// 连接数据库
Db::setConfig($config);
// 检查数据库连接
try {
    Db::connect();
    echo '数据库连接成功';
} catch (\Exception $e) {
    echo '数据库连接失败：' . $e->getMessage();
}
