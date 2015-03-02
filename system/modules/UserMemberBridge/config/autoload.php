<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package UserMemberBridge
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'UserMemberBridge',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'UserMemberBridge\UserMemberSyncronizer' => 'system/modules/UserMemberBridge/classes/UserMemberSyncronizer.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_createMemberForUser' => 'system/modules/UserMemberBridge/templates/backend',
	'be_createUserForMember' => 'system/modules/UserMemberBridge/templates/backend',
));
