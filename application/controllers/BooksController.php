<?php

class BooksController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function listAction()
    {
        $booksTEL = new Model_DbTable_books();
        $this->view->albums = $booksTEL->fetchAll();
        
    }


}



