<?php

$namespace = 'KCVDashboard\Presentation\Web\Controller';

/**
 * @var \Phalcon\Mvc\Router $router
 */

$router->addGet('/aclactivation', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'aclActivation',
    'action' => 'index'
]);

$router->addGet('/acladdrole', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'aclAddRole',
    'action' => 'index'
]);

$router->addGet('/acladdcomponent', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'aclAddComponent',
    'action' => 'index'
]);

$router->addGet('/acldefine', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'aclDefine',
    'action' => 'index'
]);

$router->addGet('/aclrolesinheritance', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'aclRolesInheritance',
    'action' => 'index'
]);