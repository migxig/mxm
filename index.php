<?php
define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)));
define('CONFIG_PATH', ROOT_PATH.'/config/');

require_once(ROOT_PATH.'/mxm/mxm.class.php');
use mxm\mxm;

mxm::run(ROOT_PATH, CONFIG_PATH);
