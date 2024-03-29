<?php

return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 10.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'qcloud',
//            'aliyun',
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
//        'aliyun' => [
//            'access_key_id' => env('SMS_ALIYUN_ACCESS_KEY_ID'),
//            'access_key_secret' => env('SMS_ALIYUN_ACCESS_KEY_SECRET'),
//            'sign_name' => 'Larabbs',
//        ],
        'qcloud' => [
            'sdk_app_id' => env('QCLOUD_SMS_APP_ID'),
            'app_key' => env('QCLOUD_SMS_APP_KEY'),
            'sign_name' => '我的代码功能测试',
            'templates' => [
                'register' => env('SMS_QCLOUD_TEMPLATE_REGISTER'),
            ]
        ],
    ],
];

