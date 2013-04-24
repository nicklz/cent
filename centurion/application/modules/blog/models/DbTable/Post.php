<?php
 
class Blog_Model_DbTable_Post extends Centurion_Db_Table_Abstract
{
    /**
     * The table name
     * 
     * @var string
     */
    protected $_name = 'blog_post';
 
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
    protected $_rowClass = 'Blog_Model_DbTable_Row_Post';
 
    /**
     * Associative array map of declarative referential integrity rules.
     * 
     * @var array
     */
    protected $_referenceMap = array('category' => array(
            'columns' => 'category_id',
            'refColumns' => 'id',
            'refTableClass' => 'Blog_Model_DbTable_Category'
            ));
}