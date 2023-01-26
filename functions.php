<?php

require 'plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/jpampaapros/wp-theme-update-github',
	__FILE__,
	'wp-theme-update-github'
);

// BRANCH
$myUpdateChecker->setBranch('main');

// ACCESS TOKEN
$myUpdateChecker->setAuthentication('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');