<?php
namespace KCVDashboard\Presentation\Web\Controller;

use Phalcon\Acl\Adapter\Memory;
use Phalcon\Acl\Component;

use Phalcon\Mvc\Controller;

class AclAddComponentController extends Controller
{
    public function indexAction()
    {
        // Adding Component
        // $acl = new Memory();

        $admin   = new Component('admin', 'Administration Pages');
        $reports = new Component('reports', 'Reports Pages');

        $this->session->acl->addComponent(
            $admin,
            [
                'dashboard',
                'users',
            ]
        );

        $this->session->acl->addComponent(
            $reports,
            [
                'list',
                'add',
            ]
        );

        $this->session->acl->addComponent(
            'admin2',
            [
                'dashboard',
                'users',
            ]
        );
        
        $this->session->acl->addComponent(
            'reports2',
            [
                'list',
                'add',
            ]
        );

        $this->view->pick('dashboard');
    }
}