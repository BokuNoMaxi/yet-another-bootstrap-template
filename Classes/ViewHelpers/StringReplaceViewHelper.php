<?php

namespace BokuNo\YABT\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

class StringReplaceViewHelper extends AbstractViewHelper
{
  /**
   * @return void
   */
  public function initializeArguments()
  {
    parent::initializeArguments();
    $this->registerArgument("Search", "string", "Value to search for", true);
    $this->registerArgument("Replace", "string", "Value that replaces searchvalue", true);
    $this->registerArgument("String", "string", "String to search in", true);
  }

  public static function renderStatic(
    array $arguments,
    \Closure $renderChildrenClosure,
    RenderingContextInterface $renderingContext
  ) {
    return str_replace($arguments["Search"],$arguments["Replace"],$arguments["String"]);
  }
}
