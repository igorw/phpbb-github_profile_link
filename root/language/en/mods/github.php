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

// umil
$lang = array_merge($lang, array(
	'INSTALL_GITHUB'				=> 'Install GitHub profile field',
	'INSTALL_GITHUB_CONFIRM'		=> 'Are you ready to install GitHub profile field?',

	'UNINSTALL_GITHUB'			=> 'Uninstall GitHub profile field',
	'UNINSTALL_GITHUB_CONFIRM'	=> 'Are you ready to uninstall GitHub profile field?',
	'UPDATE_GITHUB'				=> 'Update GitHub profile field',
	'UPDATE_GITHUB_CONFIRM'		=> 'Are you ready to update GitHub profile field?',
));

// acp_styles
$lang = array_merge($lang, array(
	'IMG_ICON_CONTACT_GITHUB'				=> 'GitHub profile field',
));

// everywhere else
$lang = array_merge($lang, array(
	'GITHUB'				=> 'GitHub',
	'UCP_GITHUB'			=> 'GitHub account',
));
