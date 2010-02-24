<?php
/**
*
* @author evil3 (Igor Wiedler)
* @package language
* @copyright (c) 2010 Igor Wiedler
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'INSTALL_GITHUB_PROFILE_FIELD'				=> 'Install github profile field',
	'INSTALL_GITHUB_PROFILE_FIELD_CONFIRM'		=> 'Are you ready to install github profile field?',

	'UNINSTALL_GITHUB_PROFILE_FIELD'			=> 'Uninstall github profile field',
	'UNINSTALL_GITHUB_PROFILE_FIELD_CONFIRM'	=> 'Are you ready to uninstall github profile field?',
	'UPDATE_GITHUB_PROFILE_FIELD'				=> 'Update github profile field',
	'UPDATE_GITHUB_PROFILE_FIELD_CONFIRM'		=> 'Are you ready to update github profile field?',
));