<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log', 'less'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.UserAdmin.components.*',
		'application.modules.UserAdmin.models.*',

		'application.vendor.sammaye.mongoyii.*',
		'application.vendor.sammaye.mongoyii.validators.*',
		'application.vendor.sammaye.mongoyii.behaviors.*',
		'application.vendor.sammaye.mongoyii.util.*'
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'speeder',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'UserAdmin' => array(
				'cache_time' => 3600
		)
	),

	// application components
	'components'=>array(
		'user'=>array(
			'class'=>'UWebUser',
			'allowAutoLogin'=>true,
			'loginUrl'=>array('/UserAdmin/auth/login'),
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=> false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'mongodb' => array(
				'class' => 'EMongoClient',
				'server' => 'mongodb://localhost:27017',
				'db' => 'yii_mongo'
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=db_name',
			'emulatePrepare' => true,
			'username' => 'db_user',
			'password' => 'db_pass',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'viewRenderer'=>array(
				'class'=>'application.vendor.yiiext.smarty-renderer.ESmartyViewRenderer',
				'fileExtension' => '.tpl',
				'pluginsDir' => 'application.vendor.smarty.smarty.distribution.libs.plugins',
				'smartyDir' => 'application.vendor.smarty.smarty.distribution.libs'
				//'configDir' => 'application.smartyConfig',
		),
		'less'=>array(
			'class'=>'application.vendor.crisu83.yii-less.components.LessServerCompiler',
			'files'=>array(
				'static/less/styles.less'=>'static/css/styles.css',
			),
			'nodePath'=>FALSE,
			'compilerPath'=>'lessc',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'speeder.nfh@gmail.com',
	),
);
