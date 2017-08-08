<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/halleeadelman.com/user/config/site.yaml',
    'modified' => 1490756271,
    'data' => [
        'title' => 'Hallee Adelman',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Hallee Adelman',
            'email' => 'hallee@adelmans.net'
        ],
        'taxonomies' => [
            0 => 'year',
            1 => 'author',
            2 => 'category',
            3 => 'tag'
        ],
        'metadata' => [
            'description' => 'Website of Hallee Adelman, Author and Founder of World of Ha'
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
