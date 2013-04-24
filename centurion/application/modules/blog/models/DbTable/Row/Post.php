<?php
class Blog_Model_DbTable_Row_Post extends Centurion_Db_Table_Row
{
    public function __toString()
    {
        return $this->title;
    }
}