<?php

/**
 * @file
 * Contains Drupal\rules\Plugin\rules\RulesOr.
 */

namespace Drupal\rules\Plugin\rules;

/**
 * Evaluates a group of conditions with a logical OR.
 *
 * @RulesElement(
 *   id = "rules_or",
 *   label = @Translation("A logical Or condition")
 * )
 */
class RulesOr extends RulesConditionContainer {

  /**
   * {@inheritdoc}
   */
  public function evaluate() {
    foreach ($this->conditions as $condition) {
      if ($condition->execute()) {
        return TRUE;
      }
    }
    // An empty OR should return TRUE, otherwise all conditions evaluated to
    // FALSE and we return FALSE.
    return empty($this->conditions);
  }

}
