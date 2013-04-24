<?php
 
class Blog_AdminPostController extends Centurion_Controller_CRUD
{
    protected $_formClassName = 'Blog_Form_Model_Post';
 
    public function preDispatch()
    {
        $this->_helper->authCheck();
        $this->_helper->aclCheck();
 
        $this->_helper->layout->setLayout('admin');
 
        parent::preDispatch();
    }
 
    public function init()
    {
        $this->_displays = array (
            'title' => $this->view->translate('Title'),
            'body' => $this->view->translate('Body'),
            'category_id' => $this->view->translate('Category'),
        );
 
        $this->_filters = array (
 
        );
 
        $this->view->placeholder('headling_1_content')->set($this->view->translate('Manage post'));
        $this->view->placeholder('headling_1_add_button')->set($this->view->translate('post'));
 
        parent::init();
    }
}