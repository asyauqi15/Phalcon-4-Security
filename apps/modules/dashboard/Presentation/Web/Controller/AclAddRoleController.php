<?php
namespace KCVDashboard\Presentation\Web\Controller;

use Phalcon\Acl\Adapter\Memory;
use Phalcon\Acl\Role;

use Phalcon\Mvc\Controller;

class AclAddRoleController extends Controller
{
    public function indexAction()
    {
        // Adding role
        // $acl = new Memory();

        $roleAdmins     = new Role('admins', 'Administrator Access');
        $roleAccounting = new Role('accounting', 'Accounting Department Access'); 
        
        $this->session->acl->addRole($roleAdmins);
        $this->session->acl->addRole($roleAccounting);

        $this->session->acl->addRole('manager');
        $this->session->acl->addRole('guest');

        // var_dump($this->session->acl);
        $this->view->pick('dashboard');
    }
}