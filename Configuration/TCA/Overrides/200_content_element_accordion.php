<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined("TYPO3") || die("Access denied.");

// Add Content Element
if (!is_array($GLOBALS["TCA"]["tt_content"]["types"]["accordion"] ?? false)) {
  $GLOBALS["TCA"]["tt_content"]["types"]["accordion"] = [];
}

// Add content element PageTSConfig
ExtensionManagementUtility::registerPageTSConfigFile(
  "yet_another_bootstrap_template",
  "Configuration/TsConfig/Page/ContentElement/Element/Accordion.tsconfig",
  "accordion"
);

// Add content element to selector list
ExtensionManagementUtility::addTcaSelectItem(
  "tt_content",
  "CType",
  ["Accordion", "accordion", "accordion", "Bootstrap5"]
);

// Assign Icon
$GLOBALS["TCA"]["tt_content"]["ctrl"]["typeicon_classes"]["accordion"] =
  "accordion";

// Configure element type
$GLOBALS["TCA"]["tt_content"]["types"]["accordion"] = array_replace_recursive(
  $GLOBALS["TCA"]["tt_content"]["types"]["accordion"],
  [
    "showitem" => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                accordion_item,
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

$GLOBALS["TCA"]["tt_content"]["columns"]["accordion_item"] = [
  "label" =>
    "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:accordion_item",
  "config" => [
    "type" => "inline",
    "foreign_table" => "accordion_item",
    "foreign_field" => "tt_content",
    "appearance" => [
      "useSortable" => true,
      "showSynchronizationLink" => true,
      "showAllLocalizationLink" => true,
      "showPossibleLocalizationRecords" => true,
      "expandSingle" => true,
      "enabledControls" => [
        "localize" => true,
      ],
    ],
    "behaviour" => [
      "mode" => "select",
    ],
  ],
];

