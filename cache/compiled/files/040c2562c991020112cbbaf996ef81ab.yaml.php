<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/halleeadelman.com/user/config/site.yaml',
    'modified' => 1490669399,
    'data' => [
        'title' => 'Hallee Adelman',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Derek Little',
            'email' => 'dlittle42@gmail.com'
        ],
        'taxonomies' => [
            0 => 'year',
            1 => 'author',
            2 => 'category',
            3 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
