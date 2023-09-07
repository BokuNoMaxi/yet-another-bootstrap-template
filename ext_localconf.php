<?php
defined("TYPO3") or die("Access denied.");

//Register custom TsConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
  '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:yabt/Configuration/TsConfig/Page/All.tsconfig">'
);

