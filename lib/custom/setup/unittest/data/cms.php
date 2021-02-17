<?php
/**
 * @license LGPLv3, https://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2021
 */

return [
	'cms' => [[
		'cms.url' => '/contact', 'cms.label' => 'Contact', 'cms.status' => 1,
		'lists' => [
			'text' => [[
				'cms.lists.type' => 'default', 'cms.lists.position' => 0,
				'text.languageid' => 'en', 'text.type' => 'name', 'text.domain' => 'cms',
				'text.label' => 'Contact page', 'text.content' => 'Contact page'
			],[
				'cms.lists.type' => 'default', 'cms.lists.position' => 1,
				'text.languageid' => 'en', 'text.type' => 'meta-keywords', 'text.domain' => 'cms',
				'text.label' => 'contact', 'text.content' => 'contact, about us'
			],[
				'cms.lists.type' => 'default', 'cms.lists.position' => 1,
				'text.languageid' => 'en', 'text.type' => 'content', 'text.domain' => 'cms',
				'text.label' => 'Hello', 'text.content' => '<h1>Hello!</h1>'
			]]
		]
	], [
		'cms.url' => '/kontakt', 'cms.label' => 'Kontakt', 'cms.status' => 0,
		'lists' => [
			'text' => [[
				'cms.lists.type' => 'default', 'cms.lists.position' => 0,
				'text.languageid' => 'de', 'text.type' => 'name', 'text.domain' => 'cms',
				'text.label' => 'Kontaktseite', 'text.content' => 'Kontaktseite'
			],[
				'cms.lists.type' => 'default', 'cms.lists.position' => 1,
				'text.languageid' => 'de', 'text.type' => 'meta-keywords', 'text.domain' => 'cms',
				'text.label' => 'kontakt', 'text.content' => 'kontakt, über uns'
			],[
				'cms.lists.type' => 'default', 'cms.lists.position' => 1,
				'text.languageid' => 'de', 'text.type' => 'content', 'text.domain' => 'cms',
				'text.label' => 'Hallo', 'text.content' => '<h1>Hallo!</h1>'
			]]
		]
	]]
];
