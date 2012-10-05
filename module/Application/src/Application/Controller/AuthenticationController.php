<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController,
Zend\View\Model\ViewModel;

class AuthenticationController extends AbstractActionController
{

    /**
     * Display index
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        // redirect to login


        return new ViewModel();
    }

    /**
     * Display login site
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function loginAction()
    {
        return new ViewModel();
    }

    /**
     * Logout user
     */
    public function logoutAction()
    {
        return new ViewModel();
    }

}