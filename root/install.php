<?php
/**
*
* @author evil3 (Igor Wiedler)
* @package umil
* @copyright (c) 2008 phpBB Group, 2010 Igor Wiedler
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'GitHub profile field';
$version_config_name = 'github_version';
$language_file = 'mods/github';

$versions = array(
	'1.0.0-rc1'	=> array(
		// add github column
		'table_column_add' => array(
			array(USERS_TABLE, 'user_github', array('VCHAR_UNI', '')),
		),
	),
	'1.0.0-rc2'	=> array(),
	'1.0.0'		=> array(),
	'1.0.1-dev'	=> array(),
);

include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);
