<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
defined("TYPO3") or die();

$lll = "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:";
$newFields = [
  "container" => [
    "exclude" => true,
    "label" => $lll."template.container",
    "config" => [
        "type" => "select",
        "renderType" => "selectSingle",
        "items" => [
          ["label" => $lll."template.container.default", "value" => "container"],
          ["label" => $lll."template.container.md", "value" => "container-md"],
          ["label" => $lll."template.container.lg", "value" => "container-lg"],
          ["label" => $lll."template.container.xl", "value" => "container-xl"],
          ["label" => $lll."template.container.xxl", "value" => "container-xxl"],
          ["label" => $lll."template.container.fluid", "value" => "container-fluid"],
        ],
      ],

    ],
    "background_color" => [
        "exclude" => true,
        "label" => $lll."template.bg-color",
        "config" => [
            "type" => "select",
            "renderType" => "selectSingle",
            "items" => [
                ["label" => $lll."template.bg-color.none", "value" => ""],
                ["label" => $lll."template.bg-color.primary", "value" => "bg-primary"],
                ["label" => $lll."template.bg-color.secondary", "value" => "bg-secondary"],
            ],
        ],
    ],
    "padding" => [
        "exclude" => true,
        "label" => $lll."template.padding",
        "config" => [
            "type" => "select",
            "renderType" => "selectMultipleSideBySide",
            "items" => [
                ["label" => "0", "value" => "p-0"],
                ["label" => "1", "value" => "p-1"],
                ["label" => "2", "value" => "p-2"],
                ["label" => "3", "value" => "p-3"],
                ["label" => "4", "value" => "p-4"],
                ["label" => "5", "value" => "p-5"],
                ["label" => "Y 1", "value" => "py-1"],
                ["label" => "Y 2", "value" => "py-2"],
                ["label" => "Y 3", "value" => "py-3"],
                ["label" => "Y 4", "value" => "py-4"],
                ["label" => "Y 5", "value" => "py-5"],
                ["label" => "X 1", "value" => "px-1"],
                ["label" => "X 2", "value" => "px-2"],
                ["label" => "X 3", "value" => "px-3"],
                ["label" => "X 4", "value" => "px-4"],
                ["label" => "X 5", "value" => "px-5"],
            ],
        ],
    ],
    "section_border" => [
        "exclude" => true,
        "label" => $lll."template.border",
        "config" => [
            "type" => "check",
            "items" => [
                ["label" => $lll."template.border", "1"]
            ],
        ],
      ],
];

ExtensionManagementUtility::addTCAcolumns("tt_content", $newFields);

$GLOBALS["TCA"]["tt_content"]["palettes"]["frames"]["showitem"] =
  "layout, container, background_color, section_border,--linebreak--, padding";
