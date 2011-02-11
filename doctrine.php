<?php
/**
 * Configuration file to initialize de Doctrine cli client 
 * 
 * @package doctrine
 * @author  Juan Pablo Romero Bernal <juan.romero@axiacore.com>
 */

require_once dirname('__FILE__') . DIRECTORY_SEPARATOR 
    . "lib" . DIRECTORY_SEPARATOR . "Doctrine" 
    . DIRECTORY_SEPARATOR . "Doctrine.php";

spl_autoload_register(array('Doctrine', 'autoload'));

require_once dirname('__FILE__') . DIRECTORY_SEPARATOR 
    . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR 
    . "settings.php";


$dbConf = $databases['default']['default'];

$dsn = $dbConf['driver'] . "://" . $dbConf['username'] . ":" 
    . $dbConf['password'] . "@" . $dbConf['host'] . "/"
    . $dbConf['database'];
    
$conn = Doctrine_Manager::connection($dsn);
    
$conn->setCollate('utf8_unicode_ci');
$conn->setCharset('utf8');

$pathModels = array();
$pathModels[] = dirname('__FILE__') . DIRECTORY_SEPARATOR . "models" 
    . DIRECTORY_SEPARATOR . "generated";
$pathModels[] = dirname('__FILE__') . DIRECTORY_SEPARATOR . "models";

Doctrine_Core::loadModels($pathModels);

$configOptions = array(
    'data_fixtures_path'    =>  dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'fixtures',
    'models_path'           =>  dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'models',
    'migrations_path'       =>  dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'migrations',
    'sql_path'              =>  dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'sql',
    'yaml_schema_path'      =>  dirname(__FILE__) . DIRECTORY_SEPARATOR
        . 'schema'
);

$cli = new Doctrine_Cli($configOptions);
$cli->run($_SERVER['argv']);