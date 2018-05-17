<?php

return [
    // 语言包
    'lang' => 'zh_CN',

    // 是否debug模式
    'debug' =>  (\Core\Environment::isDevelopment() || \Core\Environment::isTesting()),

    // 时区
    'timezone' => 'PRC',

    // 加密密钥
    'secret_key' => 'app secret key',

    // 路由配置
    'router' => [
        'pretty_url' => true,
        'default_route' => 'home/welcome', //默认路由
    ],

    // 视图模版配置
    'view' => [
        'class' => \Core\View\Native::class,
        'config' => [
            'template_dir' => VIEW_PATH,
            'ext' => '.php',
        ],
    ],

    // SESSION
    'session' => [
        'type' => 'file',
    ],

    // 数据库配置
    // 在代码中使用 App::db('default') 获取指定节点的DB实例。
    'database' => [
        // 默认数据库节点
        'default' => [
            // 是否开启慢查询日志，0为关闭
            'slow_log' => 0,
            // 表前缀
            'prefix' => '',
            // 字符集
            'charset' => 'utf8',
            // 写库
            'write' => [
                'dsn' => "mysql:host=localhost;port=3306;dbname=test;charset=utf8",
                'username' => 'root',
                'password' => '',
                'pconnect' => false,
            ],
            // 读库，只允许配一个地址，如果是一主多从的话，建议使用haproxy或其他中间件做转发
            'read' => [
                'dsn' => "mysql:host=localhost;port=3306;dbname=test;charset=utf8",
                'username' => 'root',
                'password' => '',
                'pconnect' => false,
            ]
        ]
    ],

    // 日志配置
    // 日志可配置多个实例，用于对不同模块有不同日志记录需求的项目，通常情况下使用一个默认就足够了。
    // 使用 App::logger() 不带参数获取的是默认实例。
    // 在没有日志配置的情况下，使用 App::logger() 依然可以获取到实例，但是写入的日志不会保存。
    'logger' => [
        // 默认日志
        'default' => [
            [
                'class' => \Core\Logger\Handler\ConsoleHandler::class,
                'config' => [
                    'level' => \Core\Logger\Logger::DEBUG,
                ],
            ],
            [
                'class' => \Core\Logger\Handler\FileHandler::class,
                'config' => [
                    'level' => \Core\Logger\Logger::DEBUG,
                    'savepath' => DATA_PATH . '/logs',
                ],
            ]
        ],
    ],
];
