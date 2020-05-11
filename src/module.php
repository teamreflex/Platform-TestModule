<?php

return [
    /**
     * Name of the module.
     * Used to separate panels in the admin dashboard.
     */
    'name' => 'Test',

    /**
     * Routes to register.
     */
    'routes' => __DIR__ . '/Routes/web.php',

    /**
     * Views to register.
     */
    'views' => [
        'path' => __DIR__ . '/Views',
        'namespace' => 'test',
    ],

    /**
     * Admin panels to expose.
     */
    'panels' => [
        [
            'title' => 'Test Panel',
            'route' => 'admin.panel',
            'icon' => 'ni ni-tv-2 test-primary',
        ],
    ],
];