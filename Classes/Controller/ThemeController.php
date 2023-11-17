<?php

namespace BokuNo\YABT\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Attribute\Controller;
// the module template will be initialized in handleRequest()
use TYPO3\CMS\Backend\Template\ModuleTemplate;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Imaging\IconFactory;

class ThemeController
{
  public function __construct(
    protected readonly ModuleTemplateFactory $moduleTemplateFactory,
    protected readonly IconFactory $iconFactory,
  ) {
  }

  public function __invoke(ServerRequestInterface $request): ResponseInterface
  {
    $languageService = $GLOBALS['LANG'];

    $moduleTemplate = $this->moduleTemplateFactory->create($request);

    $title = $languageService->sL('LLL:EXT:yet_another_bootstrap_template/Resources/Private/Language/Theme.xlf:tabs');
    switch ($this->MOD_SETTINGS['function']) {
      default:
        $moduleTemplate->setTitle(
          $title,
          $languageService->sL('EXT:examples/Resources/Private/Language/AdminModule/locallang.xlf:settings')
        );
        return $this->settingsAction($moduleTemplate);
    }
  }


  public function settingsAction(
    ModuleTemplate $view,
    string $cmd = 'cookies'
  ): ResponseInterface {
    return $view->renderResponse('Theme/Settings');
  }
}
