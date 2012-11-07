<?php

/**
 * Module information
 */
$aModule = array(
    'id' => 'demo-admin-module',
    'title' => 'OXID demo admin module',
    'description' => 'some module description',
    'extend' => array(
        'custom_admin_class' => 'demo-admin-module/custom_admin_class_ext',
    ),
    'files' => array(
        'custom_admin_class' => 'demo-admin-module/admin/custom_admin_class.php'
    ),
    'templates' => array(
        'custom_admin_template.tpl' => 'demo-admin-module/out/admin/tpl/custom_admin_template.tpl',
    )
);
