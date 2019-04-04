<?php
/**
 *
 * BBCode Enabled Profile Fields. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.0.1] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017 3Di, javiexin
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'PFBBCODE_ERROR_321_VERSION'	=>	'A versão mínima do phpBB requerida é 3.2.1, mas menor que 3.3.0@dev',
]);
