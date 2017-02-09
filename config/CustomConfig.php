<?php
global $_CONFIG;
$_CONFIG = array();

$_CONFIG['index:main-header'] = 'Go-Round';

$_CONFIG['main:title'] = 'Copyright &copy; 2017 by Go Round';

include('../libs/Handler.class.php');
global $handler;
$handler = new Handler;
