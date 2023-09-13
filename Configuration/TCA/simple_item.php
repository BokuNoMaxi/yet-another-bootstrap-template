<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$generalLanguageFile =
  "EXT:core/Resources/Private/Language/locallang_general.xlf";

return [
  "ctrl" => [
    "label" => "header",
    "sortby" => "sorting",
    "tstamp" => "tstamp",
    "crdate" => "crdate",
    "title" =>
      "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item",
    "type" => "item_type",
    "delete" => "deleted",
    "versioningWS" => true,
    "origUid" => "t3_origuid",
    "hideTable" => true,
    "hideAtCopy" => true,
    "prependAtCopy" => "LLL:" . $generalLanguageFile . ":LGL.prependAtCopy",
    "transOrigPointerField" => "l10n_parent",
    "transOrigDiffSourceField" => "l10n_diffsource",
    "languageField" => "sys_language_uid",
    "enablecolumns" => [
      "disabled" => "hidden",
      "starttime" => "starttime",
      "endtime" => "endtime",
    ],
    "typeicon_classes" => [
      "default" => "carousel-item",
    ],
  ],
  "types" => [
    "0" => [
      "showitem" => "
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
        --palette--;;default-type,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --palette--;;hiddenLanguagePalette",
    ],
  ],
  "palettes" => [
    "access" => [
      "showitem" => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
    ],
    "header" => [
      "showitem" => '
                header,
                --linebreak--,
                subheader,
                --linebreak--,
                header_layout,
                header_position,
            ',
    ],
    "general" => [
      "showitem" => '
                tt_content,
                item_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                --linebreak--,
            ',
    ],
    "default-type" => [
      "showitem" => '
                bodytext,--linebreak--,
                link,--linebreak--,
                image,

            ',
    ],
    "visibility" => [
      "showitem" => '
                hidden;LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:carousel_item
            ',
    ],
    // hidden but needs to be included all the time, so sys_language_uid is set correctly
    "hiddenLanguagePalette" => [
      "showitem" => "sys_language_uid, l10n_parent",
      "isHiddenPalette" => true,
    ],
  ],
  "columns" => [
    "tt_content" => [
      "exclude" => true,
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.tt_content",
      "config" => [
        "type" => "select",
        "renderType" => "selectSingle",
        "foreign_table" => "tt_content",
        "foreign_table_where" =>
          'AND tt_content.pid=###CURRENT_PID###',
        "maxitems" => 1,
        "default" => 0,
      ],
    ],
    "item_type" => [
      "label" => "LLL:" . $generalLanguageFile . ":LGL.type",
      "config" => [
        "type" => "select",
        "renderType" => "selectSingle",
        "items" => [
          [
            "label" =>
              "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:type.default",
            "value" => "0",
            "icon" => "content-textmedia",
          ],
        ],
      ],
      "l10n_mode" => "exclude",
    ],
    "hidden" => [
      "exclude" => true,
      "label" => "LLL:" . $generalLanguageFile . ":LGL.hidden",
      "config" => [
        "type" => "check",
        "items" => [
          "1" => [
            "label" =>
              "LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0",
          ],
        ],
      ],
    ],
    "starttime" => [
      "exclude" => true,
      "label" => "LLL:" . $generalLanguageFile . ":LGL.starttime",
      "config" => [
        "type" => "input",
        "renderType" => "inputDateTime",
        "eval" => "datetime",
        "default" => 0,
      ],
      "l10n_mode" => "exclude",
      "l10n_display" => "defaultAsReadonly",
    ],
    "endtime" => [
      "exclude" => true,
      "label" => "LLL:" . $generalLanguageFile . ":LGL.endtime",
      "config" => [
        "type" => "input",
        "renderType" => "inputDateTime",
        "eval" => "datetime",
        "default" => 0,
        "range" => [
          "upper" => mktime(0, 0, 0, 1, 1, 2038),
        ],
      ],
      "l10n_mode" => "exclude",
      "l10n_display" => "defaultAsReadonly",
    ],
    "sys_language_uid" => [
      "exclude" => 1,
      "label" => "LLL:" . $generalLanguageFile . ":LGL.language",
      "config" => ["type" => "language"],
    ],
    "l10n_parent" => [
      "displayCond" => "FIELD:sys_language_uid:>:0",
      "label" => "LLL:" . $generalLanguageFile . ":LGL.l18n_parent",
      "config" => [
        "type" => "select",
        "renderType" => "selectSingle",
        "items" => [["label" => "", "value" => 0]],
        "foreign_table" => "simple_item",
        "foreign_table_where" =>
          "AND simple_item.pid=###CURRENT_PID###",
        "default" => 0,
      ],
    ],
    "l10n_diffsource" => [
      "config" => [
        "type" => "passthrough",
      ],
    ],

    "header" => [
      "exclude" => true,
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.header",
      "config" => [
        "type" => "input",
        "size" => 50,
        "eval" => "trim",
        "required" => true,
      ],
    ],
    "header_layout" => [
      "exclude" => true,
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.header_layout",
      "config" => [
        "type" => "select",
        "renderType" => "selectSingle",
        "items" => [
          ["label" => "H2", "value" => "2"],
          ["label" => "H3", "value" => "3"],
          ["label" => "H4", "value" => "4"],
        ],
        "default" => "2",
      ],
      "l10n_mode" => "exclude",
    ],
    "header_position" => [
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.header_position",
      "exclude" => true,
      "config" => [
        "type" => "select",
        "renderType" => "selectSingle",
        "items" => [
          [
            "label" =>
              "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.header_position.default",
            "value" => "",
          ],
          [
            "label" =>
              "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.header_position.center",
            "value" => "center",
          ],
          [
            "label" =>
              "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.header_position.right",
            "value" => "right",
          ],
          [
            "label" =>
              "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.header_position.left",
            "value" => "left",
          ],
        ],
        "default" => "",
      ],
    ],
    "subheader" => [
      "exclude" => true,
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.subheader",
      "config" => [
        "type" => "input",
        "size" => 50,
        "eval" => "trim",
      ],
    ],

    "bodytext" => [
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.bodytext",
      "l10n_mode" => "prefixLangTitle",
      "l10n_cat" => "text",
      "config" => [
        "type" => "text",
        "cols" => "80",
        "rows" => "5",
        "softref" => "typolink_tag,email[subst],url",
        "enableRichtext" => true,
      ],
    ],
    "link" => [
      "exclude" => 1,
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.link",
      "config" => [
        "type" => "input",
        "renderType" => "inputLink",
        "size" => 50,
        "max" => 1024,
        "eval" => "trim",
        "fieldControl" => [
          "linkPopup" => [
            "options" => [
              "title" =>
                "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.link",
            ],
          ],
        ],
        "softref" => "typolink",
      ],
    ],

    "image" => [
      "exclude" => true,
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.image",
      "config" => [
        "type" => "file",
        "maxitems" => 1,
        "allowed" => "common-image-types",
      ],
    ],
    "assets" => [
      "exclude" => true,
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.assets",
      "config" => [
        "type" => "file",
        "maxitems" => 1,
        "allowed" => "common-media-types",
      ],
    ],
    "date" => [
      "exclude" => true,
      "label" =>
        "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item.date",
      "config" => [
        "type" => "date"
        
      ],
    ],
  ],
];
