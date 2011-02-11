<?php

/**
 * BaseSequences
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $value
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSequences extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('sequences');
        $this->hasColumn('value', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}