<?php


/**
 * Definitions for modules provided by EXT:examples
 */

use BokuNo\YABT\Controller\ThemeController;

return [
  'yabt' => [
      'parent' => 'site',
      'position' => "bottom",
      'access' => 'admin',
      'workspaces' => '*',
      'labels' => 'LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Theme.xlf',
      'extensionName' => 'YetAnotherBootstrapTemplate',
      'routes' => [
        '_default' => [
          'target' => ThemeController::class
        ]
      ],
  ],

];
