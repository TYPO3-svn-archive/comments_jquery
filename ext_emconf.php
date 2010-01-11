<?php

########################################################################
# Extension Manager/Repository config file for ext "comments_jquery".
#
# Auto generated 11-01-2010 12:04
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Comments: jQuery code',
	'description' => 'Makes EXT:comments use jQuery code, which is added to the end of <body>',
	'category' => 'fe',
	'shy' => 0,
	'version' => '1.0.1',
	'dependencies' => 'comments',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Steffen Gebert',
	'author_email' => 'steffen@steffen-gebert.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'comments' => '',
			'typo3' => '4.3.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"0ad8";s:27:"class.tx_commentsjquery.php";s:4:"8d50";s:12:"ext_icon.gif";s:4:"7edf";s:17:"ext_localconf.php";s:4:"8efe";s:14:"ext_tables.php";s:4:"b00a";s:12:"t3jquery.txt";s:4:"e0d2";s:19:"doc/wizard_form.dat";s:4:"5162";s:20:"doc/wizard_form.html";s:4:"195f";s:20:"res/jquery.cookie.js";s:4:"3847";s:32:"res/jquery.tx_comments_jquery.js";s:4:"0a65";s:16:"static/setup.txt";s:4:"e438";}',
	'suggests' => array(
	),
);

?>