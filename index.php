<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/protected/vendor/yiisoft/yii/framework/yii.php';
$main=require_once dirname(__FILE__).'/protected/config/main.php';
$local=require_once dirname(__FILE__).'/protected/config/main.local.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

$config = CMap::mergeArray($main,$local);
Yii::createWebApplication($config)->run();
