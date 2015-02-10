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

define('INC_UTIL',INC_ROOT.'util/');

require(INC_ROOT.'autoinclude.php');

autoinclude::FilesIn(INC_CONF);
autoinclude::FilesIn(INC_UTIL);
//require(INC_CONF.'config.php');
//require(INC_UTIL.'connection.php');

connection::connect();




//var_dump(INC_PATH);
?>

<!DOCTYPE html > 
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl"> 
 
<head> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"></meta> 
<title>testjes</title>
<link rel="stylesheet" href="../2015WWN02/css/main.css" type="text/css" media="all"></link> 
</head> 

    <body class='container'>

<div id="header">
<h1>City Gallery</h1>
</div>

<div id="nav">
London<br>
Paris<br>
Tokyo<br>
</div>

<div class='column'>
<h1>London</h1>
<?php require(INC_MODU.'view1.php'); ?>
</div>

<div class='column'>
<h1>Brussel</h1>
<?php require(INC_MODU.'view2.php'); ?>
</div>
    
<div class='column'>
<h1>invulformulier</h1>
    <?php require(INC_MODU.'form1hndlr.php'); ?>
    <?php require(INC_MODU.'form1.php'); ?>
    <?php require(INC_MODU.'form2hndlr.php'); ?>
    <?php require(INC_MODU.'form2.php'); ?>
</div>
    
<div id="footer">
Copyright © W3Schools.com
</div>

</body>


