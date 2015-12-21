<?php

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DS);

define('APP',ROOT.'app'.DS);//sistema de ficheros local
define('APP_W',basename(dirname($_SERVER['SCRIPT_NAME'])));//ruta url  APP_W.'pub'