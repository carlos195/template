<?php

ini_set('display_errors','on');//activamos la comprobacion errores

error_reporting(E_ALL);

include 'config.php';
require 'sys/helper.php';

//echo $_SERVER['REQUEST_URI'];

session::session_ini();
$id=session::get('id');
//Coder::code($id);


$conf=registry::getInstance();

$conf->welcome = 'Hola';	//__set
$msg = $conf->welcome;		//__get
unset($conf->welcome);
//Coder::codear($msg);
//Coder::codear($conf);

template::load("article");

core::init();

?>

<!--

//crear footer.php en tpl y cargar $contents(body) Template::load("vista"); esta ruta tiene el body
//si queremos cambiar otra vista template $this->tpl = Template::load("vista");
//en pub estaran los css y sacaremos una ruta para sacar dichas css

-->