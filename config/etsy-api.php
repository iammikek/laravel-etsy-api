<?php

use Etsy\Utils\PermissionScopes;

return [
    'auth' => [
        'client_id' => env('ETSY_CLIENT_ID'),
        'client_secret' => env('ETSY_CLIENT_SECRET'),
        'redirect' => env('ETSY_REDIRECT_URI'),
        'auth_url' => env('ETSY_AUTH_URI'),
        'scopes' => env('ETSY_SCOPES', PermissionScopes::ALL_SCOPES),
    ],
    'shop' => [
        'shop_id' => env('ETSY_SHOP_ID'),
    ]
];
