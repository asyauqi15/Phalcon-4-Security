<?php
namespace KCVDashboard\Presentation\Web\Controller;

use Phalcon\Acl\Adapter\Memory;
use Phalcon\Acl\Role;
use Phalcon\Acl\Component;

use Phalcon\Mvc\Controller;

class AclDefineController extends Controller
{
    public function indexAction()
    {
        // Activation

        // $acl = new Memory();

        /**
         * Add the roles
         */
        // $this->session->acl->addRole('manager');
        // $this->session->acl->addRole('accounting');
        // $this->session->acl->addRole('guest');


        /**
         * Add the Components
         */

        // $this->session->acl->addComponent(
        //     'admin',
        //     [
        //         'dashboard',
        //         'users',
        //         'view',
        //     ]
        // );

        // $this->session->acl->addComponent(
        //     'reports',
        //     [
        //         'list',
        //         'add',
        //         'view',
        //     ]
        // );

        $this->session->acl->addComponent(
            'session',
            [
                'login',
                'logout',
            ]
        );

        /**
         * Now tie them all together 
         */
        $this->session->acl->allow('admins', 'admin', 'dashboard');
        $this->session->acl->allow('manager', 'reports', ['list', 'add']);
        $this->session->acl->allow('*', 'session', '*');

        $this->session->acl->deny('guest', 'admin', 'dashboard');
        $this->session->acl->deny('guest', 'reports', 'list');

        // // true - defined explicitly
        // $this->session->acl->isAllowed('admins', 'admin', 'dashboard');

        // // true - defined with wildcard
        // $this->session->acl->isAllowed('manager', 'session', 'login');

        // // true - defined with wildcard
        // $this->session->acl->isAllowed('accounting', 'reports', 'view');

        // // false - defined explicitly
        // $this->session->acl->isAllowed('guest', 'reports', 'view');

        // // false - default access level
        // $this->session->acl->isAllowed('guest', 'reports', 'add');

        // var_dump($acl);
        $this->view->pick('dashboard');
    }
}