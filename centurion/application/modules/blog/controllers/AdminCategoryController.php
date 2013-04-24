<?php
 
class Blog_AdminCategoryController extends Centurion_Controller_CRUD
{
    //The form model to use for the edit/new action
    protected $_formClassName = 'Blog_Form_Model_Category';
 
    public function preDispatch()
    {
        //Check that the user is connected
        $this->_helper->authCheck();
        //Check that the user have permission to the current action
        $this->_helper->aclCheck();
 
        //Change the layout to admin
        $this->_helper->layout->setLayout('admin');
 
        parent::preDispatch();
    }
 
    public function init()
    {
        $this->_displays = array (
        	'title' => $this->view->translate('Title'),
        );
 
        $this->_filters = array (
            'title' => $this->view->translate('Title')
        );
 
        $this->view->placeholder('headling_1_content')->set($this->view->translate('Manage category'));
        $this->view->placeholder('headling_1_add_button')->set($this->view->translate('category'));
 
        parent::init();
    }
}