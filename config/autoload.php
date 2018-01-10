<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Src
	'HeimrichHannot\BankingWidgets\Validator\IbanValidator'           => 'system/modules/banking_widgets/src/Validator/IbanValidator.php',
	'HeimrichHannot\BankingWidgets\FrontendWidget\IbanFrontendWidget' => 'system/modules/banking_widgets/src/FrontendWidget/IbanFrontendWidget.php',
	'HeimrichHannot\BankingWidgets\Widget\IbanWidget'                 => 'system/modules/banking_widgets/src/Widget/IbanWidget.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'iban_frontend_widget' => 'system/modules/banking_widgets/templates/frontendwidget',
));
