<?php

define('ADMIN', 'Admin');
define('AGENT', 'Agent');
define('INVESTOR', 'Investor');
define('SITE_HEAD', 'Site_Head');

define('REFER_CODE_PREFIX', 'AKINFRATECH');

define('ROLES', [
    ADMIN,
]);
define('CASH', 'Cash');
define('CHEQUE', 'Cheque');
define('DD', 'DD');
define('NEFT', 'NEFT/RTGS');
define('CARD', 'Card');


define('PAYMENT_MODE', [CASH, CHEQUE, DD, NEFT, CARD]);


define('USER_TYPES', [ADMIN, AGENT, SITE_HEAD, INVESTOR]);

define('PERMISSIONS_CATEGORY', ['User management', 'Property Management', 'Investors management']);

define('PERMISSIONS', [
    'User management' =>  [
        [
            "name" => "Create User",
            "url" => "admin/user-management/create",
            "parent_id" => 1
        ],
        [
            "name" => "List User",
            "url" => "admin/user-management",
            "parent_id" => 1
        ],
        [
            "name" => "Lock User Account",
            "url" => "admin/user-management/lock",
            "parent_id" => 1
        ],
        [
            "name" => "Edit User",
            "url" => "admin/user-management/edit",
            "parent_id" => 1
        ],
    ],
    'Property Management' => [
        [
            "name" => "Create Site",
            "url" => "admin/property-management/site/create",
            "parent_id" => 2
        ],
        [
            "name" => "List Site",
            "url" => "admin/property-management/site",
            "parent_id" => 2
        ],
        [
            "name" => "Edit Site",
            "url" => "admin/property-management/site/edit",
            "parent_id" => 2
        ],
        [
            "name" => "Create Plot",
            "url" => "admin/property-management/plot/create",
            "parent_id" => 2
        ],
        [
            "name" => "List Plot",
            "url" => "admin/property-management/plot",
            "parent_id" => 2
        ],
        [
            "name" => "Edit Plot",
            "url" => "admin/property-management/plot/edit",
            "parent_id" => 2
        ],

    ]
]);
