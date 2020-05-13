<?php
namespace KCVDashboard\Presentation\Web\Controller;

use Phalcon\Acl\Enum;
use Phalcon\Acl\Adapter\Memory;

use Phalcon\Mvc\Controller;

class AclActivationController extends Controller
{
    public function indexAction()
    {
        // Activation
        $this->session->acl = new Memory();

        $this->session->acl->setDefaultAction(Enum::DENY);

        // var_dump($this->session->acl);
        $this->view->pick('dashboard');
    }
}