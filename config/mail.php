
<?php

return [

    'default' => env('MAIL_MAILER', 'smtp'), 
    
    'port' => env('MAIL_PORT', 587),
  
    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.gmail.com'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME', 'anjuckuriyappan123@gmail.com'), // Corrected
            'password' => env('MAIL_PASSWORD', 'wxsorgrgukprjmug'), // Corrected
            'timeout' => null,
        ],
        

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
        
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],

    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'anjuckuriyappan123@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'anju'),
    ],

];
