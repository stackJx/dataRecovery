<?php
require '../vendor/autoload.php';

use think\facade\Db;

// 加载数据库配置
$config = require 'database.php';

// 设置数据库配置
Db::setConfig($config);

// 检查数据库连接
try {
    Db::connect();
    echo '数据库连接成功';
} catch (\Exception $e) {
    echo '数据库连接失败：' . $e->getMessage();
}

// 打印数据库表
$tables = Db::query('show tables');
print_r($tables);