# Stackbug Data

## 项目概述

Stackbug Data 是一个用来处理错误数据的 PHP 项目。它使用 Composer 进行依赖管理，主要依赖于 `topthink/think-orm`，`phpoffice/phpspreadsheet`，`ramsey/uuid` 和 `brick/math`。

项目源码：[GitHub](https://github.com/stackbug/data)

## 运行环境

- PHP >= 7.4
- Composer >= 2.0

## 开发环境部署/安装

1. 克隆项目到本地：`git clone https://github.com/stackbug/data.git`
2. 进入项目目录：`cd data`
3. 安装依赖：`composer install`
4. 配置数据库连接信息：编辑 `src/config/database.php` 文件
5. 运行项目：`php src/index.php`

## 服务器架构说明

本项目主要由以下几部分组成：

- 数据库：存储数据
- PHP：处理业务逻辑
- Composer：管理 PHP 依赖

## 代码上线

1. 将代码推送到 GitHub：`git push origin master`
2. 在服务器上拉取最新代码：`git pull origin master`
3. 在服务器上安装依赖：`composer install --no-dev`
4. 重启 PHP 服务

## 扩展包说明

| 扩展包 | 用途 | 文档地址 |
| --- | --- | --- |
| topthink/think-orm | ORM 框架，用于数据库操作 | [文档](https://www.kancloud.cn/manual/think-orm/1257998) |
| phpoffice/phpspreadsheet | 用于处理 Excel 文件 | [文档](https://phpspreadsheet.readthedocs.io/en/latest/) |
| ramsey/uuid | 用于生成 UUID | [文档](https://uuid.ramsey.dev/en/latest/) |
| brick/math | 提供任意精度的数学运算 | [文档](https://github.com/brick/math) |