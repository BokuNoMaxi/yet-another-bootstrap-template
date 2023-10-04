<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
defined("TYPO3") or die();
//overrides settings from following files:
//vendor/typo3/cms-frontend/Configuration/TCA/tt_content.php

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
    "ratio" => [
        "exclude" => true,
        "label" => $lll."template.ratio",
        "config" => [
            "type" => "select",
            "renderType" => "selectSingle",
            "items" => [
                ["label" => "", "value" => ""],
                ["label" => "1x1", "value" => "ratio-1x1"],
                ["label" => "4x3", "value" => "ratio-4x3"],
                ["label" => "16x9", "value" => "ratio-16x9"],
                ["label" => "21x9", "value" => "ratio-21x9"],
            ],
        ],
    ],
    "rounded" => [
        "exclude" => true,
        "label" => $lll."template.rounded",
        "config" => [
            "type" => "check",
            "items" => [
                ["label" => $lll."template.rounded", "value" => "1"]
            ],
        ],
    ],
    "thumbnail" => [
        "exclude" => true,
        "label" => $lll."template.thumbnail",
        "config" => [
            "type" => "check",
            "items" => [
                ["label" => $lll."template.thumbnail", "value" => "1"]
            ],
        ],
    ],
    "object_fit" => [
        "exclude" => true,
        "label" => $lll."template.objectfit",
        "config" => [
            "type" => "select",
            "renderType" => "selectSingle",
            "items" => [
                ["label" => $lll."template.objectfit.none", "value" => ""],
                ["label" => $lll."template.objectfit.contain", "value" => "object-fit-contain"],
                ["label" => $lll."template.objectfit.cover", "value" => "object-fit-cover"],
                ["label" => $lll."template.objectfit.fill", "value" => "object-fit-fill"],
                ["label" => $lll."template.objectfit.scale-down", "value" => "object-fit-scale"]
            ],
        ],
    ],
    "max_height" => [
        "exclude" => true,
        "label" => $lll."template.maxheight",
        "config" => [
            "type" => "select",
            "renderType" => "selectSingle",
            "items" => [
                ["label" => "", ""],
                ["label" => "20%",  "value" => "mh-20"],
                ["label" => "40%",  "value" => "mh-40"],
                ["label" => "60%",  "value" => "mh-60"],
                ["label" => "80%",  "value" => "mh-80"],
                ["label" => "80%",  "value" => "mh-80"],
                ["label" => "100%", "value" => "mh-100"]
            ],
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns("tt_content", $newFields);

$GLOBALS["TCA"]["tt_content"]["palettes"]["frames"]["showitem"] =
  "layout, container, background_color, section_border,--linebreak--, padding";

$GLOBALS["TCA"]["tt_content"]["palettes"]["mediaAdjustments"]["showitem"] =
  "ratio, imagewidth, imageheight,--linebreak--,
   thumbnail ,rounded";

$GLOBALS['TCA']['tt_content']['palettes']['objectfit'] = [
    'showitem' => 'object_fit, max_height'
];
