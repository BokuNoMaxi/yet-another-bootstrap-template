<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined("TYPO3") or die("Access denied.");

// Add Content Element
if (!is_array($GLOBALS["TCA"]["tt_content"]["types"]["card"] ?? false)) {
  $GLOBALS["TCA"]["tt_content"]["types"]["card"] = [];
}

// Add content element PageTSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
  "yet_another_bootstrap_template",
  "Configuration/TsConfig/Page/ContentElement/Element/Card.tsconfig",
  "card"
);

// Add content element to selector list
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
  "tt_content",
  "CType",
  ["card", "card", "card", "Bootstrap5"]
);

// Assign Icon
$GLOBALS["TCA"]["tt_content"]["ctrl"]["typeicon_classes"]["card"] =
  "card-group";

// Configure element type
$GLOBALS["TCA"]["tt_content"]["types"]["card"] = array_replace_recursive(
  $GLOBALS["TCA"]["tt_content"]["types"]["card"],
  [
    "showitem" => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                simple_item,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
  ]
);
