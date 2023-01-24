<?php

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/jpampaapros/wp-theme-update-github',
	__FILE__,
	'wp-theme-update-github'
);

// BRANCH
$myUpdateChecker->setBranch('main');

// ACCESS TOKEN
$myUpdateChecker->setAuthentication('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');