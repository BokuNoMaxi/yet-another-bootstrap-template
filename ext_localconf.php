<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined("TYPO3") || die("Access denied.");

//Register custom TsConfig
ExtensionManagementUtility::addPageTSConfig(
  '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:yet_another_bootstrap_template/Configuration/TsConfig/Page/All.tsconfig">'
);

