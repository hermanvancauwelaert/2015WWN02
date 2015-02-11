<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($_SERVER);
define('INC_PROJ','/2015/2015WWN02/');
define('INC_ROOT',$_SERVER['DOCUMENT_ROOT'].INC_PROJ);
define('INC_MODU',INC_ROOT.'modules/');
define('INC_CONF',INC_ROOT.'config/');
define('INC_HTML',INC_ROOT.'Html/');

define('INC_UTIL',INC_ROOT.'util/');

require(INC_ROOT.'autoinclude.php');

autoinclude::FilesIn(INC_CONF);
autoinclude::FilesIn(INC_UTIL);
//require(INC_CONF.'config.php');
//require(INC_UTIL.'connection.php');

include(INC_HTML.'frontpage.html')


?>

