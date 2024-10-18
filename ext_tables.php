<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined("TYPO3") || die();

ExtensionManagementUtility::allowTableOnStandardPages(
  "accordion_item"
);
ExtensionManagementUtility::allowTableOnStandardPages(
  "card_item"
);
