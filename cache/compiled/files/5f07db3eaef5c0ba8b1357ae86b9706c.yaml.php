<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/halleeadelman.com/user/config/plugins/email.yaml',
    'modified' => 1490452750,
    'data' => [
        'enabled' => true,
        'from' => 'halleehost@halleeadelman.com',
        'from_name' => 'Hallee Adelman',
        'to' => 'halleehost@halleeadelman.com',
        'to_name' => 'Hallee Adelman',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'mail.halleeadelman.com',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'halleehost',
                'password' => '@Wszzfbi&0y@Jd'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
