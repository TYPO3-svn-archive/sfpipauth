<?php

########################################################################
# Extension Manager/Repository config file for ext "sfpipauth".
#
# Auto generated 03-04-2012 19:45
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'IP Authentication Service',
	'description' => 'This is a service to log in or lock Users by their IP',
	'category' => 'services',
	'author' => 'Christoph Buchli | snowflake',
	'author_email' => 'support@snowflake.ch',
	'shy' => '',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:13:{s:9:"ChangeLog";s:4:"a419";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"2fca";s:12:"ext_icon.gif";s:4:"886f";s:17:"ext_localconf.php";s:4:"1033";s:14:"ext_tables.php";s:4:"1a6a";s:14:"ext_tables.sql";s:4:"e725";s:16:"locallang_db.xml";s:4:"a203";s:7:"tca.php";s:4:"7fb1";s:33:"class/class.tx_sfpipauth_main.php";s:4:"cc9e";s:14:"doc/manual.sxw";s:4:"f3c2";s:30:"sv1/class.tx_sfpipauth_sv1.php";s:4:"149c";s:30:"sv2/class.tx_sfpipauth_sv2.php";s:4:"d572";}',
);

?>