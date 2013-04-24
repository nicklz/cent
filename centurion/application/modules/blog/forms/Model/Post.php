<?php
 
class Blog_Form_Model_Post extends Centurion_Form_Model_Abstract
{
    //The model relative to this form.
    protected $_modelClassName = 'Blog_Model_DbTable_Post';
 
    public function __construct($options = array (), Centurion_Db_Table_Row_Abstract $instance = null)
    {
        $this->_exclude = array('id', 'slug');
 
        $this->_elementLabels = array(
                    'title'             => $this->_translate('Title'),
                    'body'              => $this->_translate('Body'),
                    'category_id'       => $this->_translate('Category'),
        );
 
        parent::__construct($options, $instance);
    }
}