<?php
/**
 *
 * Highslide. An extension for the phpBB Forum Software package.
 * French translation by Michel (http://www.ezcom-fr.com) & Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 Sheer <https://www.phpbbguru.net/community>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_HIGH_SLIDE'				=> 'Diaporama d’images',
	'ACP_HIGH_SLIDE_CONFIG'			=> 'Paramètres',
	'ACP_HIGHSLIDE_EXPLAIN'			=> 'Permet de configurer les options de l’extension « Highslide ».',
	'ACP_HIGH_SLIDE_TYPE'			=> 'Mode mini-galerie',
	'ACP_HIGH_SLIDE_TYPE_EXPLAIN'	=> 'Permet d’afficher des images miniatures supplémentaires et cliquables pour faciliter la navigation.',
	'UPDATE_CONFIG_SUCCESS'			=> 'Les paramètres ont été mis à jour avec succès !'

));
