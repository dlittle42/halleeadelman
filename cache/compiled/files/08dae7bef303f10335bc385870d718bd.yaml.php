<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/halleeadelman.com/user/themes/hallee-theme/blueprints/mainpage.yaml',
    'modified' => 1496254500,
    'data' => [
        'title' => 'Mainpage Content',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.custom.callout1' => [
                                    'label' => 'Homepage Callout Left',
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.custom.callout2' => [
                                    'label' => 'Homepage Callout Right',
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.custom.contact1' => [
                                    'label' => 'Homepage Contact Left',
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.custom.contact2' => [
                                    'label' => 'Homepage Contact Right',
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
