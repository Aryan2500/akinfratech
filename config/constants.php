<?php

define('ADMIN', 'Admin');
define('AGENT', 'Agent');
define('INVESTOR', 'Investor');
define('SITE_HEAD', 'Site_Head');
define('CUSTOMER', 'Customer');

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

define('USER_TYPES', [ADMIN, AGENT, SITE_HEAD, INVESTOR, CUSTOMER]);

define('PERMISSIONS_CATEGORY', ['User management', 'Property Management', 'Booking management']);

define('PERMISSIONS', [

    [
        "name" => "User Create form",
        "url" => "user.create",
        "parent_id" => 1
    ],
    [
        "name" => "User Save",
        "url" => "user.store",
        "parent_id" => 1
    ],
    [
        "name" => "List User",
        "url" => "user.list",
        "parent_id" => 1
    ],
    [
        "name" => "User Edit Form",
        "url" => "user.edit",
        "parent_id" => 1
    ],
    [
        "name" => "Update User",
        "url" => "user.update",
        "parent_id" => 1
    ],

    [
        "name" => "Role list",
        "url" => "role.list",
        "parent_id" => 1
    ],
    [
        "name" => "Create Role ",
        "url" => "role.create",
        "parent_id" => 1
    ],
    [
        "name" => "Role Save",
        "url" => "role.store",
        "parent_id" => 1
    ],
    [
        "name" => "Role Edit",
        "url" => "role.edit",
        "parent_id" => 1
    ],
    [
        "name" => "Role Update",
        "url" => "role.update",
        "parent_id" => 1
    ],


    [
        "name" => "Site Create Form",
        "url" => "site.create",
        "parent_id" => 2
    ],
    [
        "name" => "List Site",
        "url" => "site.list",
        "parent_id" => 2
    ],
    [
        "name" => "Save Site",
        "url" => "site.store",
        "parent_id" => 2
    ],
    [
        "name" => "Edit Site",
        "url" => "site.edit",
        "parent_id" => 2
    ],
    [
        "name" => "Update Site",
        "url" => "site.update",
        "parent_id" => 2
    ],
    ///////////////////////// PLOT //////////
    [
        "name" => "Plot Create Form",
        "url" => "plot.create",
        "parent_id" => 2
    ],
    [
        "name" => "Plot Save",
        "url" => "plot.save",
        "parent_id" => 2
    ],
    [
        "name" => "List Plot",
        "url" => "plot.list",
        "parent_id" => 2
    ],
    [
        "name" => "Edit Plot",
        "url" => "plot.edit",
        "parent_id" => 2
    ],
    [
        "name" => "Update Plot",
        "url" => "plot.update",
        "parent_id" => 2
    ],
    ///////////////////Plot Type////////////////
    [
        "name" => "Plottype  Create Form",
        "url" => "plottype.create",
        "parent_id" => 2
    ],
    [
        "name" => "Plottype Save",
        "url" => "plottype.save",
        "parent_id" => 2
    ],
    [
        "name" => "List Plottype",
        "url" => "plottype.list",
        "parent_id" => 2
    ],
    [
        "name" => "Edit Plottype",
        "url" => "plottype.edit",
        "parent_id" => 2
    ],
    [
        "name" => "Update Plottype",
        "url" => "plottype.update",
        "parent_id" => 2
    ],
    ///////////////// Land /////////////////
    [
        "name" => "Land  Create Form",
        "url" => "land.create",
        "parent_id" => 2
    ],
    [
        "name" => "Land Save",
        "url" => "land.save",
        "parent_id" => 2
    ],
    [
        "name" => "List Land",
        "url" => "land.list",
        "parent_id" => 2
    ],
    [
        "name" => "Edit Land",
        "url" => "land.edit",
        "parent_id" => 2
    ],
    [
        "name" => "Update Land",
        "url" => "land.update",
        "parent_id" => 2
    ],
    ///////////////// Farmer /////////////////
    [
        "name" => "Farmer Create Form",
        "url" => "farmer.create",
        "parent_id" => 2
    ],
    [
        "name" => "Farmer Save",
        "url" => "farmer.save",
        "parent_id" => 2
    ],
    [
        "name" => "List Farmer",
        "url" => "farmer.list",
        "parent_id" => 2
    ],
    [
        "name" => "Edit Farmer",
        "url" => "farmer.edit",
        "parent_id" => 2
    ],
    [
        "name" => "Update Farmer",
        "url" => "farmer.update",
        "parent_id" => 2
    ],
    ///////////////// BLoCk  /////////////////
    [
        "name" => "Block Create Form",
        "url" => "block.create",
        "parent_id" => 2
    ],
    [
        "name" => "Block Save",
        "url" => "block.save",
        "parent_id" => 2
    ],
    [
        "name" => "List Block",
        "url" => "block.list",
        "parent_id" => 2
    ],
    [
        "name" => "Edit Block",
        "url" => "block.edit",
        "parent_id" => 2
    ],
    [
        "name" => "Update Block",
        "url" => "block.update",
        "parent_id" => 2
    ],


    [
        "name" => "Plot-registry Create form",
        "url" => "plot-registry.create",
        "parent_id" => 3
    ],
    [
        "name" => "Plot-registry Save",
        "url" => "plot-registry.store",
        "parent_id" => 3
    ],
    [
        "name" => "List Plot-registry",
        "url" => "plot-registry.list",
        "parent_id" => 3
    ],
    [
        "name" => "Plot-registry Edit Form",
        "url" => "plot-registry.edit",
        "parent_id" => 3
    ],
    [
        "name" => "Update Plot-registry",
        "url" => "plot-registry.update",
        "parent_id" => 3
    ],
    ///////////////// Customer ///////////////

    [
        "name" => "Customer Create form",
        "url" => "customer.create",
        "parent_id" => 3
    ],
    [
        "name" => "Customer Save",
        "url" => "customer.store",
        "parent_id" => 3
    ],
    [
        "name" => "List Customer",
        "url" => "customer.list",
        "parent_id" => 3
    ],
    [
        "name" => "Customer Edit Form",
        "url" => "customer.edit",
        "parent_id" => 3
    ],
    [
        "name" => "Update Customer",
        "url" => "customer.update",
        "parent_id" => 3
    ],

]);
