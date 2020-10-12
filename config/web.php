<?php

return [



    'github' => [
        'user' => env('GIT_APP_USER', 'satheeshdomainindia'),
        'pass' => env('GIT_APP_PASS', ''),
    ],
    'orderbox' => [
        'id' => env('ORDERBOX_ID', 'id'),
        'key' => env('ORDERBOX_KEY', ''),
    ],
    'whmcs' => [
        'user' => env('WHMCS_USER', 'admin'),
        'pass' => env('WHMCS_PASS', ''),
        'url'  => env('WHMCS_URL' , 'http://88.198.75.149/cp/includes/api.php'),
    ],


];
