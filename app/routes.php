<?php

return [
    '/car/create' => [
        'GET' => [
            'controller' => '\App\Controller\CreateCarController',
            'action'     => 'index'
        ],
        'POST' => [
            'controller' => '\App\Controller\CreateCarController',
            'action'     => 'save'
        ]
    ],
    '/contact/create' => [
        'GET' => [
            'controller' => '\App\Controller\CreateContactController',
            'action'     => 'index'
        ],
        'POST' => [
            'controller' => '\App\Controller\CreateContactController',
            'action'     => 'save'
        ]
    ],
    '/contact/all' => [
        'GET' => [
            'controller' => '\App\Controller\CreateContactController',
            'action'     => 'all'
        ]
    ],
    '/contact/list' => [
        'GET' => [
            'controller' => '\App\Controller\CreateContactController',
            'action'     => 'list'
        ]
    ],
    '/car/list' => [
        'GET' => [
            'controller' => '\App\Controller\CreateCarController',
            'action'     => 'list'
        ]
    ],
    '/car/report1' => [
        'GET' => [
            'controller' => '\App\Controller\CreateCarController',
            'action'     => 'report1'
        ]
    ],
    '/app/menu' => [
        'GET' => [
            'controller' => '\App\Controller\MainController',
            'action'     => 'index'
        ]
    ],
];