<?php

/**
 * @file
 * Contains Drupal\rules_test\Plugin\Action\TestAction.
 */

namespace Drupal\rules_test\Plugin\Action;

use Drupal\Core\Action\ActionInterface;
use Drupal\rules\RulesLog;

/**
 * Provides an always FALSE test condition.
 *
 * @Action(
 *   id = "rules_test_action",
 *   label = @Translation("Test action logging.")
 * )
 */
class TestAction implements ActionInterface {

  
  public function execute() {
    RulesLog::logger()->log('action called');
  }

  public function executeMultiple(array $objects) {

  }

}
