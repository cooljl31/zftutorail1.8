<?php
class Form_LoginForm extends Zend_Form
{
    public function __construct($options = null) {
        parent::__construct($options);
        
        $this->setName('login');
        
        $username = new Zend_Form_Element('username');
        $username->setLabel('User name:')
                ->setRequired();
        
        $password = new Zend_Form_Element('passwrod');
        $password->setLabel('Password:')
                ->setRequired(TRUE);
        
        $login = new Zend_Form_Element_Submit('login');
        $login->setLabel('Login');
        
        $this->addElements(array($username, $password, $login));
        $this->setMethod('post');
        $this->setAction(Zend_Controller_Front::getInstance()->getBaseUrl().'authentication/login');
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

