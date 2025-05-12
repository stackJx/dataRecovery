<?php
return [
    // 默认数据连接标识
    'default' => 'mysql',
    // 数据库连接信息
    'connections' => [
        'mysql' => [
            // 数据库类型
            'type' => 'mysql',
            // 主机地址
            'hostname' => '',
            // 用户名
            'username' => '',
            // 数据库名
            'database' => '',
            // 密码
            'password' => '',
            // 数据库编码默认采用utf8
            'charset' => 'utf8',
            // 数据库调试模式
            'debug' => true,
            // 数据库连接端口
            'hostport'    => '3306',
        ],
    ],
];