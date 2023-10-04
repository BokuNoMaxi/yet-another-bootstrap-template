<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$generalLanguageFile =
  "EXT:core/Resources/Private/Language/locallang_general.xlf";
$lll = "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:";

return [
  "ctrl" => [
    "label" => "header",
    "sortby" => "sorting",
    "tstamp" => "tstamp",
    "crdate" => "crdate",
    "title" => $lll.":card_item",
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
      "default" => "card-group-item",
    ],
  ],
  "types" => [
    "0" => [
      "showitem" => "
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
        --palette--;;default-type,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                image,imageorient,--palette--;;media,
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
                card_header,
                header_layout,
                header_position,
            ',
    ],
    "general" => [
      "showitem" => 'tt_content',
    ],
    "default-type" => [
      "showitem" => '
                bodytext,--linebreak--,
                card_footer,--linebreak--,
                link,--linebreak--,
                datetime,

            ',
    ],
    "media" => [
      "showitem" => 'background_color, border_color'
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
      "label" => $lll."tt_content",
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
        "foreign_table" => "card_item",
        "foreign_table_where" =>
          "AND card_item.pid=###CURRENT_PID###",
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
      "label" => $lll."header",
      "config" => [
        "type" => "input",
        "size" => 50,
        "eval" => "trim",
        "required" => true,
      ],
    ],
    "header_layout" => [
      "exclude" => true,
      "label" => $lll."header_layout",
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
      "label" => $lll."header_position",
      "exclude" => true,
      "config" => [
        "type" => "select",
        "renderType" => "selectSingle",
        "items" => [
          [
            "label" => $lll.":header_position.default",
            "value" => "",
          ],
          [
            "label" => $lll.":header_position.center",
            "value" => "center",
          ],
          [
            "label" => $lll.":header_position.right",
            "value" => "right",
          ],
          [
            "label" => $lll.":header_position.left",
            "value" => "left",
          ],
        ],
        "default" => "",
      ],
    ],
    "subheader" => [
      "exclude" => true,
      "label" => $lll."subheader",
      "config" => [
        "type" => "input",
        "size" => 50,
        "eval" => "trim",
      ],
    ],

    "bodytext" => [
      "label" => $lll."bodytext",
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
      "label" => $lll."link",
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
                 $lll.":link",
            ],
          ],
        ],
        "softref" => "typolink",
      ],
    ],

    "image" => [
      "exclude" => true,
      "label" => $lll."image",
      "config" => [
        "type" => "file",
        "maxitems" => 1,
        "allowed" => "common-image-types",
      ],
    ],
    "imageorient" => [
      "exclude" => true,
      "label" => $lll."image-position",
      "config" => [
          "type" => "select",
          "renderType" => "selectSingle",
          'items' => [
            [
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                'value' => 0,
                'icon' => 'content-beside-text-img-above-center',
            ],
            [
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                'value' => 8,
                'icon' => 'content-beside-text-img-below-center',
            ],
            [
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                'value' => 25,
                'icon' => 'content-beside-text-img-right',
            ],
            [
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                'value' => 26,
                'icon' => 'content-beside-text-img-left',
            ],
        ],
        'default' => 0,
        'fieldWizard' => [
            'selectIcons' => [
                'disabled' => false,
            ],
        ],
      ],
    ],

    "datetime" => [
      "exclude" => true,
      "label" => $lll."date",
      "config" => [
        'type' => 'datetime',
        'format' => 'date',
        'eval' => 'int',
        'default' => 0,
      ],
    ],
    "background_color" => [
      "exclude" => true,
      "label" => $lll."template.bg-color",
      "config" => [
          "type" => "select",
          "renderType" => "selectSingle",
          "items" => [
              ["label" => $lll."color.none", "value" => ""],
              ["label" => $lll."color.primary", "value" => "bg-primary"],
              ["label" => $lll."color.secondary", "value" => "bg-secondary"],
              ["label" => $lll."color.success", "value" => "bg-success"],
              ["label" => $lll."color.danger", "value" => "bg-danger"],
              ["label" => $lll."color.warning", "value" => "bg-warning"],
              ["label" => $lll."color.info", "value" => "bg-info"],
              ["label" => $lll."color.light", "value" => "bg-light"],
              ["label" => $lll."color.dark", "value" => "bg-dark"],
          ],
      ],
    ],
    "border_color" => [
      "exclude" => true,
      "label" => $lll."template.border-color",
      "config" => [
          "type" => "select",
          "renderType" => "selectSingle",
          "items" => [
              ["label" => $lll."color.none", "value" => ""],
              ["label" => $lll."color.primary", "value" => "border-primary"],
              ["label" => $lll."color.secondary", "value" => "border-secondary"],
              ["label" => $lll."color.success", "value" => "border-success"],
              ["label" => $lll."color.danger", "value" => "border-danger"],
              ["label" => $lll."color.warning", "value" => "border-warning"],
              ["label" => $lll."color.info", "value" => "border-info"],
              ["label" => $lll."color.light", "value" => "border-light"],
              ["label" => $lll."color.dark", "value" => "border-dark"],
          ],
      ],
    ],
    "card_header" => [
      "exclude" => true,
      "label" => $lll."template.card_header",
      "config" => [
          "type" => "check",
          "items" => [
              ["label" => $lll."template.card_header", "1"]
          ],
      ],
    ],
    "card_footer" => [
      "label" =>"$lll.footer",
      "config" => [
        "type" => "text",
        "cols" => "80",
        "rows" => "5",
        "softref" => "typolink_tag,email[subst],url",
        "enableRichtext" => true,
      ],
    ]
  ]
];
