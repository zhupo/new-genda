<?php

return [
    'autoload' => false,
    'hooks' => [
        'upgrade' => [
            'cms',
        ],
        'app_init' => [
            'cms',
        ],
        'view_filter' => [
            'cms',
        ],
        'user_sidenav_after' => [
            'cms',
        ],
        'xunsearch_config_init' => [
            'cms',
        ],
        'xunsearch_index_reset' => [
            'cms',
        ],
    ],
    'route' => [
        '/cms/$' => 'cms/index/index',
        '/cms/t/[:diyname]$' => 'cms/tag/index',
        '/cms/p/[:diyname]$' => 'cms/page/index',
        '/cms/s$' => 'cms/search/index',
        '/cms/d/[:diyname]$' => 'cms/diyform/index',
        '/cms/d/[:diyname]/post' => 'cms/diyform/post',
        '/cms/d/[:diyname]/[:id]' => 'cms/diyform/show',
        '/cms/special/[:diyname]' => 'cms/special/index',
        '/u/[:id]' => 'cms/user/index',
        '/cms/[:diyname]$' => 'cms/channel/index',
        '/cms/[:catename]/[:id]$' => 'cms/archives/index',
        '/example$' => 'example/index/index',
        '/example/d/[:name]' => 'example/demo/index',
        '/example/d1/[:name]' => 'example/demo/demo1',
        '/example/d2/[:name]' => 'example/demo/demo2',
    ],
    'priority' => [],
    'domain' => '',
];
