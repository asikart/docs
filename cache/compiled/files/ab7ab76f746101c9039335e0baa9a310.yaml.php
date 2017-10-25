<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/asikart/web/asikart.co/public_html/docs/user/config/plugins/git-sync.yaml',
    'modified' => 1508902002,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/asikart/docs',
        'user' => 'asika32764',
        'password' => 'gitsync-def50200740423062d9608317634dfc6928d29925568047dc547640f3ec98bb23649a3d0a92eb7fc5407cf992e2cb657b440ac0860a30ed2fd0c4f15aa6670437556fde34abf2cbc04c227209fe50742517fe14f74092e84751255d69240f56466a9f538e9665ef34cab75893b99171092c15af0f23c9663f092ee98',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
