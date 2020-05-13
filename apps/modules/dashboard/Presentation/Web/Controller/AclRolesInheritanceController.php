<?php
namespace KCVDashboard\Presentation\Web\Controller;

use Phalcon\Acl\Adapter\Memory;
use Phalcon\Acl\Role;

use Phalcon\Mvc\Controller;

class AclRolesInheritanceController extends Controller
{
    public function indexAction()
    {
        // Activation
        // $acl = new Memory();

        /**
         * Create the roles
         */
        $manager    = new Role('Managers');
        $accounting = new Role('Accounting Department');
        $guest      = new Role('Guests');

        // /**
        //  * Add the `guest` role to the ACL 
        //  */
        // $this->session->acl->addRole($guest);

        // /**
        //  * Add the `accounting` inheriting from `guest` 
        //  */
        // $this->session->acl->addRole($accounting, $guest);

        // /**
        //  * Add the `manager` inheriting from `accounting` 
        //  */
        // $this->session->acl->addRole($manager, $accounting);

        /**
         * Add all the roles
         */
        $this->session->acl->addRole($manager);
        $this->session->acl->addRole($accounting);
        $this->session->acl->addRole($guest);

        /**
         * Add the inheritance 
         */
        $this->session->acl->addInherit($manager, $accounting);
        $this->session->acl->addInherit($accounting, $guest);

        // var_dump($acl);
        $this->view->pick('dashboard');
    }
}