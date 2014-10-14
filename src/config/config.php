<?php 

/**
 * Configuration options for Salesforce Oath settings and REST API defaults.
 */
return array(

	/**
	 * Options include WebServer or UserPassword
	 */
	'authentication' => 'WebServer',

	/**
	 * Enter your OAuth creditials:
	 */
	'oauth' => array(

			'consumerKey' => '',
			'consumerSecret' => '',
			'callbackURI' => '',
			'loginURL' => 'https://login.salesforce.com',
	),

	/**
	 * Display can be page, popup, touch or mobile
	 * Immediate determines whether the user should be prompted for login and approval. Values are either true or false. Default is false.
	 * State specifies any additional URL-encoded state data to be returned in the callback URL after approval.
	 * Scope specifies what data your application can access. For more details see: https://help.salesforce.com/HTViewHelpDoc?id=remoteaccess_oauth_scopes.htm&language=en_US
	 */
	'optional' => array(

		'display' => 'page',
		'immediate' => 'false',
		'state' => '',
		'scope' => '',

	),

	
	/**
	* After authentication token is received, redirect to:
	*/
	'authRedirect' => '/',

	/**
	 * Default settings for resource requests.
	 * Setting debug to true will output your request and response with any Salesforce errors.
	 */
	'defaults' => array(

		'method' => 'get',
		'format' => 'json',
		'debug' => false,
		
	),

	/**
	 * If you'd like to specify an API version manually it can be done here.
	 * Format looks like '30.0'
	 */
	'version' => '',

	/**
	 * Langauge
	 */
	'language' => 'en_US'

);