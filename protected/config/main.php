<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'password',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

        'page' => array(),

	),

    'onBeginRequest' => array('ModuleUrlManager', 'collectRules'),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
//                'home' => 'website/index', // http://localhost/yourwebapp/home
//                '<alias:about>' => 'website/page', // http://localhost/yourwebapp/about
//                'page/<alias>' => 'website/page', // http://localhost/yourwebapp/page/<any string>

//                '<alias:about>' => 'website/page',
//                'page/about/<alias:authors>' => 'website/page',
//                'page/<alias>' => 'website/page',

                // Creating URL rules for static pages
//                '<alias:about>' => 'website/page',
//                '<alias:contact>' => 'website/page',
//                '<alias:tos>' => 'website/page',

                // Creating URL rules for static pages by using regular expressions
                //'<alias:(about|contact|tos)>' => 'website/page'

                // Creating URL rules for static pages /tos and an alias parameter to be term_of_service
                //'tos' => array('website/page', 'defaultParams' => array('alias' => 'term_of_service')),

                // Creating URL rules for all static pages, should place it last
                //'<alias>' => 'website/page',
			),

            'showScriptName' => false
		),

//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yii_external_actions',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
		'adminEmail'=>'webmaster@example.com',
	),
);