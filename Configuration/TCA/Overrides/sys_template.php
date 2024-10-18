<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined("TYPO3") || die();

ExtensionManagementUtility::addStaticFile(
  "yet_another_bootstrap_template",
  "Configuration/TypoScript",
  "Yet another bootstrap template"
);
