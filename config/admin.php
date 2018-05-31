<?php

return [
    // 模块名称
    'name' => 'admin',

    // 后台的 URI 入口 必须以 / 开头
    'uri' => '/admin',

    // 后台专属域名，没有的话可以留空
    'domain' => '',

    // 应用名称，在页面标题和左上角站点名称处显示
    'title' => env('APP_NAME', 'Laravel'),

    // 模型配置信息文件存放目录
    'model_config_path' => config_path('admin'),
];
