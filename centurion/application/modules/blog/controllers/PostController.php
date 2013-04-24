<?php
 
class Blog_PostController extends Centurion_Controller_Action
{
    protected $_model = 'blog/post';
 
    public function indexAction()
    {
        $this->_forward('list');
    }
 
    public function listAction()
    {
        $this->view->postRowset = Centurion_Db::getSingleton($this->_model)->select(true)->fetchAll();
    }
 
    public function getAction()
    {
        $this->view->row = Centurion_Db::getSingleton($this->_model)->findOneById($this->_getParam('id'));
    }
}