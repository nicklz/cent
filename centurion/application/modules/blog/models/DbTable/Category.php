<?php
 
class Blog_Model_DbTable_Category extends Centurion_Db_Table_Abstract
{
 
    /**
     * The table name
     * 
     * @var string
     */
    protected $_name = 'blog_category';
 
    /**
     * The primary key column or columns
     * 
     * @var mixed
     */
    protected $_primary = array('id');
 
    /**
     * Classname for row
     * 
     * @var string
     */
    protected $_rowClass = 'Blog_Model_DbTable_Row_Category';
 
    /**
     * Simple array of class names of tables that are "children" of the current table.
     * 
     * @var array
     */
    protected $_dependentTables = array('posts' => 'Blog_Model_DbTable_Post');
}