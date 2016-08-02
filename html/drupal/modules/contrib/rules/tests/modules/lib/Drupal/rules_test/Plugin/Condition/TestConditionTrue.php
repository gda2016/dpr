<?php

/**
 * @file
 * Contains Drupal\rules_test\Plugin\Condition\TestConditionTrue.
 */

namespace Drupal\rules_test\Plugin\Condition;

use Drupal\rules\Plugin\rules\RulesConditionContainer;

/**
 * Provides an always TRUE test condition.
 *
 * @Condition(
 *   id = "rules_test_condition_true",
 *   label = @Translation("Test condition returning true")
 * )
 */
class TestConditionTrue extends RulesConditionContainer {

  /**
   * {@inheritdoc}
   */
  public function evaluate() {
    return TRUE;
  }

}