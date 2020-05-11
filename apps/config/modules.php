<?php

return array(
    'dashboard' => [
        'namespace' => 'KCVDashboard',
        'webControllerNamespace' => 'KCVDashboard\Presentation\Web\Controller',
        'apiControllerNamespace' => '',
        'className' => 'KCVDashboard\Module',
        'path' => APP_PATH . '/modules/dashboard/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'index',
        'defaultAction' => 'index'
    ],
);