<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/asikart/web/asikart.co/public_html/docs/user/config/site.yaml',
    'modified' => 1508821784,
    'data' => [
        'title' => 'Asikart Docs',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Simon Asika',
            'email' => 'asika32764@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Asikart extenstions docs.'
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
