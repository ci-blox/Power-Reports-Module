<?php
return array(
	/* the root directory of all your reports
	reports can be organized in subdirectories */
	'reportDir' => '../../reports',

	/* the root directory of all dashboards*/
	'dashboardDir' => '../../sample_dashboards',
    
	/* this enables one to change the default bootstrap theme */
	'bootstrap_theme' => 'flatly',

	//email settings
	'mail_settings' => array(
		//set 'enabled' to true to enable the 'email this report' functionality
		'enabled'=>true,
		
		'from'=>'reports@ciblox.com',
		
		//php's mail function
		// 'method'=>'mail'
		
		//sendmail
		
		// 'method'=>'sendmail',
		// 'command'=>'/usr/sbin/sendmail -bs' //optional
		
		
		//smtp
		
		'method'=>'smtp',
		'server'=>'localhost',
		'port'=>'25', 						//optional (default 25)
		
		'username'=>'', 	//optional
		'password'=>'', 	//optional
		'encryption'=>'' 				//optional (either 'ssl' or 'tls')
		
	),
	//email settings
	'mail_scheduler' => array(
		//set 'enabled' to true to enable the 'email this report' functionality
		'enabled'=>true,
		
		'from'=>'reports@ciblox.com',
		
		//php's mail function
		// 'method'=>'mail'
		
		//sendmail
		
		// 'method'=>'sendmail',
		// 'command'=>'/usr/sbin/sendmail -bs' //optional
		
		
		//smtp
		
		'method'=>'smtp',
		'server'=>'localhost',
		'port'=>'25', 						//optional (default 25)
		/*
		'username'=>'youremailusername', 	//optional
		'password'=>'yoursmtppassword', 	//optional
		'encryption'=>'ssl' 				//optional (either 'ssl' or 'tls')
		*/
	),

	/* this defines the database environments
	//the keys are the environment names (e.g. "dev", "production")
	//the values are arrays that contain connection info */
	'environments' => array(
		'main'=>array(
			//this is what is used as the "host" macro within reports
			'host'=>'localhost',

			'ado'=>array(
				'uri'=>'mysql://username:password@localhost/database'
			),

			'mysql'=>array(
				'host'=>'localhost',
				'user'=>'datamart',
				'pass'=>'ba5240',
				'database'=>'datamart_basales'
			),

			'mongo'=>array(
				'host'=>'localhost',
				'port'=>'27017'
			)
		)
	)
);