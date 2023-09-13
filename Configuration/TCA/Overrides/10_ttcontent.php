<?php
$GLOBALS["TCA"]["tt_content"]["columns"]["simple_item"] = [
    "label" =>
      "LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Backend.xlf:simple_item",
    "config" => [
      "type" => "inline",
      "foreign_table" => "simple_item",
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
  