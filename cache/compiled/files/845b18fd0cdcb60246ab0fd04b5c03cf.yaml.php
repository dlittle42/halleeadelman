<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/halleeadelman.com/user/themes/hallee-theme/blueprints.yaml',
    'modified' => 1495550693,
    'data' => [
        'name' => 'Hallee Theme',
        'version' => '0.1.0',
        'description' => 'Theme for HalleeAdelman.com',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Derek Little',
            'email' => 'dlittle42@gmail.com'
        ],
        'homepage' => 'https://github.com/derek-little/grav-theme-hallee-theme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/derek-little/grav-theme-hallee-theme/issues',
        'readme' => 'https://github.com/derek-little/grav-theme-hallee-theme/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
