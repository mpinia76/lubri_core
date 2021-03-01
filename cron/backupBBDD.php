<?php


include_once  dirname(__DIR__) . '/vendor/autoload.php';


use Lubri\Core\conf\LubriConfig;
use Cose\persistence\PersistenceContext;
use Lubri\Core\notificaciones\backupBBDD\BackupBBDD;

//inicializamos cuentas core.
LubriConfig::getInstance()->initialize();
LubriConfig::getInstance()->initLogger( dirname(__FILE__).  "/log4php.xml");

$persistenceContext =  PersistenceContext::getInstance();


$notificacion = new BackupBBDD();
$notificacion->send();

//cerramos la conexión a la base.
$persistenceContext->close();




?>
