<?php

########################################################################
# Extension Manager/Repository config file for ext: "fluid_styled_content_responsive"
#
# 22-06-2021 14:30
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = [
	'title' => 'FLUID Styled Content Responsive',
	'description' => 'Experiment to make FSC textmedia rendering completely responsive',
	'category' => 'templates',
	'author' => 'Loek Hilgersom',
	'author_email' => 'typo3extensions@netcoop.nl',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.1',
	'constraints' => [
		'depends' => [
			'typo3' => '9.0.0-11.9.99',
			'fluid_styled_content' => '9.0.0-'
		],
		'conflicts' => [],
		'suggests' => [],
	],
	'autoload' => [
		'psr-4' => ['Netcoop\\FluidStyledContentResponsive\\' => 'Classes'],
  	],
	'_md5_values_when_last_written' => '',
];
