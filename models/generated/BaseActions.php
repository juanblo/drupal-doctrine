<?php

/**
 * BaseActions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $aid
 * @property string $type
 * @property string $callback
 * @property blob $parameters
 * @property string $label
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseActions extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('actions');
        $this->hasColumn('aid', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('type', 'string', 32, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '32',
             ));
        $this->hasColumn('callback', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('parameters', 'blob', null, array(
             'type' => 'blob',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('label', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}