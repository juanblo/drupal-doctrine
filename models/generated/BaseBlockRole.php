<?php

/**
 * BaseBlockRole
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $module
 * @property string $delta
 * @property integer $rid
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBlockRole extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('block_role');
        $this->hasColumn('module', 'string', 64, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '64',
             ));
        $this->hasColumn('delta', 'string', 32, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '32',
             ));
        $this->hasColumn('rid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}